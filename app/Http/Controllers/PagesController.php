<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
   public function page(Request $request, $page="index"){
      //$product = Product::getProduct();//Product::all();//Product::all()->take(6);  số lượng sản phẩm hiển thị
     // $product = Product::all()->sortBy("product_id")->take(6);
      $return_fillter = "";
      if ($request->has('category')) {
         $products = Product::where('category_id', $request->input('category'))->latest()->paginate(15);
         $return_fillter = $request->input('category');
      }
      else{
         $products = Product::all();
      }
      //hiển thị danh sách  sản phẩm
      if(Auth::user() == ''){
         $user_name = [];
      }else{
         //hiển thị tên tài khoản đăng nhập
         $user_name = User::where('user_id', Auth::user()->user_id)->get();
      }
      $category = Category::all(); //hiển thị danh sách loại sản phẩm
      $brands = Brand::all(); //hiển thị danh sách thương hiệu 
      $product_news = Product::getProductNews(); //lấy sản phẩm mới nhất hiển thị cho page blog
      //compact:  cần chuyển nhiều mảng tới một page thì ta dùng
      return view($page, ['dataProduct'=> $products], compact('category', 'brands', 'product_news', 'return_fillter', 'user_name'));
   }
   public function searchProducts(Request $request)
   {
      $searchterm = $request->input('search');//truyền sản phẩm muốn tìm kiếm
      $searchProducts = Product::where('product_name','LIKE','%'.$searchterm.'%')->latest()->paginate(15);
      return view('pages.search', compact('searchProducts', 'searchterm'));
   }
   public function productDetail(Request $request, $id)
   {

      // Query Lấy các hình ảnh liên quan của các Sản phẩm đã được lọc
      $product_detail = Product::where('product_id', $id)->first();
      //All list
      $products = Product::all();
      return view('pages.products_detail', ['dataProduct'=> $products], compact('product_detail'));
   }
}
