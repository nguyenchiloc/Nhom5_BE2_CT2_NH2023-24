<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\User;
use App\Models\Price;
use Illuminate\Support\Facades\Auth;

class ProductFilterController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $categoryID
     * @return \Illuminate\Http\Response
     */
    public function fillterCategory($categoryID)
    {
        /***************************Common****************************************** */
        //hiển thị danh sách loại sản phẩm active
        $category = Category::all()->where('category_status', '=', 'Active');  
        //hiển thị danh sách thương hiệu active
        $brands = Brand::all()->where('brand_status', 'Active');
        //hiển thị danh sách loại giá tiền sản phẩm active
        $price = Price::all()->where('price_status', '=', 'Active'); 
        $user = Auth::user();
        //hiển thị user
        $user = Auth::user() == '' ? [] : User::where('user_id', Auth::user()->user_id)->get();
        /***************************Common****************************************** */
        
        $categoryID =$categoryID;
        $dataProduct = Product::where('category_id', $categoryID)->latest()->paginate(15); 
        //hiển thị user
        $user = Auth::user() == '' ? [] : User::where('user_id', Auth::user()->user_id)->get();
        return view('index', compact('dataProduct','category','brands','user', 'categoryID', 'price'));
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $brandID
     * @return \Illuminate\Http\Response
     */
    public function fillterBrand($brandID)
    {
         /***************************Common****************************************** */
        //hiển thị danh sách loại sản phẩm active
        $category = Category::all()->where('category_status', '=', 'Active');  
        //hiển thị danh sách thương hiệu active
        $brands = Brand::all()->where('brand_status', 'Active');
        //hiển thị danh sách loại giá tiền sản phẩm active
        $price = Price::all()->where('price_status', '=', 'Active'); 
        $user = Auth::user();
        //hiển thị user
        $user = Auth::user() == '' ? [] : User::where('user_id', Auth::user()->user_id)->get();
        /***************************Common****************************************** */
        
        $brandID =$brandID;
        $brand_view = Brand::where('brand_id', $brandID)->first();
        
        $sortBrandName = $brand_view->brand_name;
        $dataProduct = Product::where('brand_id', $brandID)->latest()->paginate(15); 
        //hiển thị user
        $user = Auth::user() == '' ? [] : User::where('user_id', Auth::user()->user_id)->get();
        return view('index', compact('dataProduct','category','brands','user', 'brandID', 'price', 'sortBrandName'));
    }  
    /**
    * Show fillter theo giá từ khoảng đến khoảng
    *
    * @param  int  $priceID
    * @return \Illuminate\Http\Response
    */
    public function fillterPrice(Request $request, $priceID)
    {
        /***************************Common****************************************** */
        //hiển thị danh sách loại sản phẩm active
        $category = Category::all()->where('category_status', '=', 'Active');  
        //hiển thị danh sách thương hiệu active
        $brands = Brand::all()->where('brand_status', 'Active');
        //hiển thị danh sách loại giá tiền sản phẩm active
        $price = Price::all()->where('price_status', '=', 'Active'); 
        $user = Auth::user();
        //hiển thị user
        $user = Auth::user() == '' ? [] : User::where('user_id', Auth::user()->user_id)->get();
        /***************************Common****************************************** */
        $priceID =$priceID;
        $price_view = Price::where('price_id', $priceID)->first();
        $minPrice = $price_view->price_to;
        $maxPrice = $price_view->price_from;
        $sortPriceName = $price_view->price_name;
        $dataProduct = Product::whereBetween('product_price', [$minPrice, $maxPrice])->latest()->paginate(15); 
        return view('index', compact('dataProduct','category','brands','user','price', 'sortPriceName'));
    }
    public function fillterSort(Request $request)
    {
        /***************************Common****************************************** */
        //hiển thị danh sách loại sản phẩm active
        $category = Category::all()->where('category_status', '=', 'Active');  
        //hiển thị danh sách thương hiệu active
        $brands = Brand::all()->where('brand_status', 'Active');
        //hiển thị danh sách loại giá tiền sản phẩm active
        $price = Price::all()->where('price_status', '=', 'Active'); 
        $user = Auth::user();
        //hiển thị user
        $user = Auth::user() == '' ? [] : User::where('user_id', Auth::user()->user_id)->get();
        /***************************Common****************************************** */
        $sortName = "";
        if($request->Asc){
            $dataProduct = Product::orderBy('product_price', 'asc')->paginate(15);
            $sortName = "Giá tiền từ thấp đến cao";
        }
        else{
            $dataProduct = Product::orderBy('product_price', 'desc')->paginate(15);
            $sortName = "Giá tiền từ cao đến thấp ";
        }
        return view('index', compact('dataProduct','category','brands','user','price', 'sortName'));
    }
}
