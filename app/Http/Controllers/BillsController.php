<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $bills = Bill::where('user_id', Auth::user()->user_id);
            //Tính tổng 
            return view('bill.show_order', [ 'bills' => $bills], compact('category', 'brands', 'user', 'price', 'carts'));
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
