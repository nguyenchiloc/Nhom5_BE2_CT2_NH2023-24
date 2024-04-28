<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all(); //hiển thị danh sách loại sản phẩm
        //compact:  cần chuyển nhiều mảng tới một page thì ta dùng
        return  view('management.category', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, FlasherInterface $flasher)
    {
        //
        $news = new Category;
        $inputs = $request->all(); 
        $news = Category::create($inputs);

        if( $news->save()) {
            $flasher->addSuccess('Create success', 'Sunshine !');
        }else{
            $flasher->addError('Fail !');
        }
        return redirect()->back();
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
        $category = Category::all(); //hiển thị danh sách loại sản phẩm
        //compact:  cần chuyển nhiều mảng tới một page thì ta dùng
        $category_data_old = Category::findOrFail($id);
        $category_data_old = Category::where('category_id', $category_data_old->category_id)->first();
        return  view('management.category', compact('category', 'category_data_old'));
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
        $data_edit = Category::findOrFail($id);
        $data_edit->category_name = $request->category_name;
        $data_edit->category_description = $request->category_description;
        $data_edit->category_status = $request->category_status;
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
    public function destroy($id, FlasherInterface $flasher)
    {
        $data_delete = Category::findOrFail($id);
        if( $data_delete->delete()) {
            $flasher->addSuccess('Delete success', 'Sunshine !');
        }else{
            $flasher->addError('Fail!');
        }
        return redirect()->back();
    }
}