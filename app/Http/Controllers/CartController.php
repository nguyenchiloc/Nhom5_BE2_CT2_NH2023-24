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
        $existing_cart = Cart::where('product_id', $product_id)->where('user_id', $user_id)->first();
        if ($existing_cart == null) {
            $request->validate([
                'quantity' => 'required|gte:1|lte:' . $product->product_qty,
            ]);
    
            Cart::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'quantity' => $request->quantity,
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
       $carts = Cart::where('user_id', Auth::user()->user_id)->get();
        //Tính tổng 
        return view('cart.show_cart', [ 'carts' => $carts], compact('category', 'brands', 'user', 'price'));
    }
    public function update_cart(Request $request, $id, FlasherInterface $flasher)
    { 
        $data_edit = Cart::findOrFail($id);
        //xét điều kiện +- quantity
        if($request->cart_status == "cart_quantity_up"){
            $data_edit->quantity = $request->quantity + 1;
        }
        else{
            $data_edit->quantity = $request->quantity - 1;
        }
        if( $data_edit->quantity > 0){
            if( $data_edit->save()) {
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
}