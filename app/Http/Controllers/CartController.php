<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;
use App\Models\Brand;
use App\Models\User;
use App\Models\Price;
use App\Models\Bill;
use App\Models\BillDetail;
use Flasher\Prime\FlasherInterface;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add_to_cart(Request $request, $product_id)
    {
        $user_id = Auth::user()->user_id;
        $product_id = $product_id;
        $product = Product::where('product_id', $product_id)->first();
        //Kiểm tra sản phẩm trong giỏ hàng đã tồn tại hay chưa ? cart_status = save để phân biệt với những sản phẩm đã đặt hàng
        $existing_cart = Cart::where('product_id', $product_id)->where('user_id', $user_id)->where('cart_status', '=', 'save')->first();
        if ($existing_cart == null) {
            $request->validate([
                'quantity' => 'required|gte:1|lte:' . $product->product_qty,
            ]);
    
            Cart::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'quantity' => $request->quantity,
                'cart_status' => 'save',
            ]);
        }
        else {
            $existing_cart->update([
                'quantity' => $existing_cart->quantity + $request->quantity,
            ]);
        }

        return  redirect()->back();
    }
    public function show_cart()
    {
       //hiển thị danh sách loại sản phẩm active
       $category = Category::all()->where('category_status', '=', 'Active');  
       //hiển thị danh sách thương hiệu active
       $brands = Brand::all()->where('brand_status', 'Active');
       //hiển thị danh sách loại giá tiền sản phẩm active
       $price = Price::all()->where('price_status', '=', 'Active'); 
       //hiển thị user
       $user = Auth::user() == '' ? [] : User::where('user_id', Auth::user()->user_id)->get();
       /***************************Common****************************************** */
       $carts = Cart::where('user_id', Auth::user()->user_id)
                 ->where('cart_status', '=', 'save')->get(); 
        //Tính tổng 
        return view('cart.show_cart', [ 'carts' => $carts], compact('category', 'brands', 'user', 'price'));
    }
    public function update_cart(Request $request, $id, FlasherInterface $flasher)
    { 
        $data_edit = Cart::findOrFail($id);
        //xét điều kiện +- quantity
        if($request->cart_qty_status == "cart_quantity_up"){
            $data_edit->quantity = $request->quantity + 1;
        }
        else{
            $data_edit->quantity = $request->quantity - 1;
        }
        if( $data_edit->quantity > 0){
            if($data_edit->save()) {
                $flasher->addSuccess('Updated success', 'Sunshine !');
            }
            else{
                $flasher->addError('Fail !');
            }
        }
        else{
            $data_edit->delete();
            $flasher->addSuccess('Delete success', 'Sunshine !');
        }
        return  redirect()->back();
    }
    public function destroy_cart($id, FlasherInterface $flasher)
    {
        $data_delete = Cart::findOrFail($id);
        if( $data_delete->delete()) {
            $flasher->addSuccess('Delete success', 'Sunshine !');
        }else{
            $flasher->addError('Fail!');
        }
        return redirect()->back();
    }
    //checkout
    public function getCheckOut()
    { 
        $carts = Cart::where('user_id', Auth::user()->user_id)
                ->where('cart_status', '=', 'save')->get();
        return  view('cart.checkout', [ 'carts' => $carts]);
    }
    public function postCheckOut(Request $request, FlasherInterface $flasher) {
        $data_cart = Cart::where('user_id', Auth::user()->user_id)
                    ->where('cart_status', '=', 'save')->get();
        if ($data_cart == null)
        {
            $flasher->addError('Your cart is null !');
            return redirect()->back();
        }
        if(Auth::user()->phone == null || Auth::user()->address == null)
        {
            $flasher->addError('Please check the information again !');
            return redirect()->back();
        }
        foreach ($data_cart as $cart) {
            $product = Product::findOrFail($cart->product_id);
            if ($product == null)
            {
                $flasher->addError('product is null !');
                return redirect()->back();
            }
            //kiểm tra số lượng trong kho
            $check_qty_stock = $product->product_qty - $cart->quantity;
            if($check_qty_stock < 0){
                $message = $product->product_name . " không đủ sản phẩm";
                $flasher->addError($message);
                return redirect()->back(); 
            }
        }

        $bill = Bill::create([
            'user_id' => Auth::user()->user_id,
            'total_qty' => $request->total_qty,
            'total_amount' => $request->total_amt,
            'date_invoice' => date('Y-m-d H:i:s'),
            'status' => 'unconfirm',//trạng thái chưa xác nhận đơn hàng
            'note' => $request->note,
        ]);
        foreach ($data_cart as $cart) {
            $product = Product::findOrFail($cart->product_id);
            $cart = Cart::findOrFail($cart->cart_id);
            BillDetail::create([
                'bill_id'    => $bill->bill_id,
                'cart_id'    => $cart->cart_id,
                'product_id' => $cart->product_id,
                'quantity'  => $cart->quantity,
                'price'     => $product->product_price,
            ]);
            //Khi user đặt hàng thì số lượng sản phẩm trong kho trừ ra
            $product->update([
                'product_qty' => $product->product_qty - $cart->quantity,
            ]);
            $cart->update([
                'cart_status' => 'order',
            ]);
            //$cart->delete();
        }
        $flasher->addSuccess('Order success', 'Sunshine !');
        return  view('cart.confirm_order');
    }
}