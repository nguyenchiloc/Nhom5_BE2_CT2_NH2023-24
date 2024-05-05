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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
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
    public function show_detail($id)
    {
        //
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
                    ->orderBy('date_invoice', 'desc')->paginate(5);
        $bills_detail = BillDetail::all()->where('bill_id', $id);
        //Tính tổng 
        return view('bills.show_order', [ 'bills_detail' => $bills_detail], compact('category', 'brands', 'user', 'price', 'carts', 'bills'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
