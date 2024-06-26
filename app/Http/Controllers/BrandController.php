<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;

class BrandController extends Controller
{
    public function index()
    {
        $brand = Brand::all(); //hiển thị danh sách 
        //compact:  cần chuyển nhiều mảng tới một page thì ta dùng
        return  view('management.brand', compact('brand'));
    }
    public function create(Request $request, FlasherInterface $flasher)
    {
        //
        $news = new Brand;
        $inputs = $request->all(); 
        $news = Brand::create($inputs);

        if( $news->save()) {
            $flasher->addSuccess('Create success', 'Sunshine !');
        }else{
            $flasher->addError('Fail !');
        }
        return redirect()->back();
    }
    public function edit($id)
    {
        //
        $brand = Brand::all(); //hiển thị danh sách loại sản phẩm
        //compact:  cần chuyển nhiều mảng tới một page thì ta dùng
        $brand_data_old = Brand::findOrFail($id);
        $brand_data_old = Brand::where('brand_id', $brand_data_old->brand_id)->first();
        return  view('management.brand', compact('brand', 'brand_data_old'));
    }
    public function update(Request $request, $id, FlasherInterface $flasher)
    {
        //
        $data_edit = Brand::findOrFail($id);
        $data_edit->brand_name = $request->brand_name;
        $data_edit->brand_description = $request->brand_description;
        $data_edit->brand_status = $request->brand_status;
        if( $data_edit->save()) {
            $flasher->addSuccess('Updated success', 'Sunshine !');
        }else{
            $flasher->addError('Fail !');
        }
        return redirect()->back();
    }
    public function destroy($id, FlasherInterface $flasher)
    {
        $data_delete = Brand::findOrFail($id);
        if( $data_delete->delete()) {
            $flasher->addSuccess('Delete success', 'Sunshine !');
        }else{
            $flasher->addError('Fail!');
        }
        return redirect()->route('brand.index');
    }
}
