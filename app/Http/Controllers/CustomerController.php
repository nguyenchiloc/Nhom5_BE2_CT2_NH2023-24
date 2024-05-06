<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Flasher\Prime\FlasherInterface;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customer = User::all(); 
        //compact:  cần chuyển nhiều mảng tới một page thì ta dùng
        return  view('management.customer', compact('customer'));
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
        $customer = User::all(); //hiển thị danh sách loại sản phẩm
        //compact:  cần chuyển nhiều mảng tới một page thì ta dùng
        $customer_data_old = User::findOrFail($id);
        $customer_data_old = User::where('user_id', $customer_data_old->user_id)->first();
        return  view('management.customer', compact('customer', 'customer_data_old'));
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
        $data_edit = User::findOrFail($id);
        $data_edit->level_id = $request->customer_level;
        if( $data_edit->save()) {
            $flasher->addSuccess('Updated success', 'Sunshine !');
        }else{
            $flasher->addError('Fail !');
        }
        return redirect()->back();
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
