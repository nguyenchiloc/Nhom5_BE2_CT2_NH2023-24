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

class BillsController extends Controller
{
    public function show_order(Request $request)
    {
        //show user
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
        $bills = Bill::where('user_id', Auth::user()->user_id)
                    ->orderBy('date_invoice', 'desc')->paginate(10);
        //Tính tổng 
        return view('bills.show_order', [ 'bills' => $bills], compact('category', 'brands', 'user', 'price', 'carts'));
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_detail($id, Request $request)
    {
        //
        $category = Category::all()->where('category_status', '=', 'Active');  
        //hiển thị danh sách thương hiệu active
        $brands = Brand::all()->where('brand_status', 'Active');
        //hiển thị danh sách loại giá tiền sản phẩm active
        $price = Price::all()->where('price_status', '=', 'Active'); 
        //hiển thị user
        $user = Auth::user() == '' ? [] : User::where('user_id', Auth::user()->user_id)->get();
        $carts = Cart::where('user_id', Auth::user()->user_id)
                    ->where('cart_status', '=', 'save')->get(); 
        $bills = Bill::where('user_id', Auth::user()->user_id)
                    ->orderBy('date_invoice', 'desc')->paginate(5);
        /***************************Common****************************************** */
        $bills_detail = BillDetail::all()->where('bill_id', $id);
        $bills_info = Bill::findOrFail($id);
        //return $bills_info;
        //Tính tổng 
        return view('bills.show_order', [ 'bills_detail' => $bills_detail], compact('category', 'brands', 'user', 'price', 'carts', 'bills','bills_info'));
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getCancelOrder($id, FlasherInterface $flasher)
    {
        $data_bill = Bill::findOrFail($id);
        $data_bill->update([
            'status' => 'cancel',
        ]);
        $bills_detail = BillDetail::all()->where('bill_id', $id);
        foreach ($bills_detail as $bills_detail) {
            $cart = Cart::findOrFail($bills_detail->cart_id);
            $cart->update([
                'cart_status' => 'save',
            ]);
        }
        return view('bills.confirm_cancel_order');
    }
    //--------------------Admin--------------------
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bills = Bill::all(); //hiển thị danh sách loại sản phẩm
        //$user = User::findOrFail();
        //compact:  cần chuyển nhiều mảng tới một page thì ta dùng
        return  view('management.bill', compact('bills'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $bills = Bill::all(); //hiển thị danh sách loại sản phẩm
        //compact:  cần chuyển nhiều mảng tới một page thì ta dùng
        $bills_data_old = Bill::findOrFail($id);
        $bills_data_old = Bill::where('bill_id', $bills_data_old->bill_id)->first();
        $bills_detail = BillDetail::where('bill_id', $bills_data_old->bill_id)->get();
        return  view('management.bill', compact('bills', 'bills_data_old','bills_detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, FlasherInterface $flasher)
    {
        //
        $data_edit = Bill::findOrFail($id);
        $data_edit->status = $request->status;
        if($data_edit->save()) {
            $flasher->addSuccess('Updated status success', 'Sunshine !');
        }else{
            $flasher->addError('Fail !');    
        }

        $bills_detail = BillDetail::all()->where('bill_id', $id);
        foreach ($bills_detail as $bills_detail) {
            $product = Product::findOrFail($bills_detail->product_id);
            $cart = Cart::findOrFail($bills_detail->cart_id);
             //Khi user hủy đặt hàng thì số lượng sản phẩm trong kho + ra
             $product->update([
                'product_qty' => $product->product_qty + $cart->quantity,
            ]);
            $cart->update([
                'cart_status' => 'confirm',
            ]);
        }
        return redirect()->back();
    }
}
