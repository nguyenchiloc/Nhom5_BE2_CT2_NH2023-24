<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\User;
use App\Models\Price;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
   public function page(Request $request, $page="index"){
      /***************************Common****************************************** */
      //hiển thị danh sách loại sản phẩm active
      $category = Category::all()->where('category_status', '=', 'Active');  
      //hiển thị danh sách thương hiệu active
      $brands = Brand::all()->where('brand_status', 'Active');
      //hiển thị danh sách loại giá tiền sản phẩm active
      $price = Price::all()->where('price_status', '=', 'Active'); 
       /***************************Common****************************************** */
      //Mảng Category
      foreach ($category as $arrCategory){
         $category_list[] = array($arrCategory->category_id);
      }
      $products = Product::whereIn('category_id', $category_list)->latest()->paginate(15); 
      //hiển thị tên tài khoản đăng nhập
      $user = Auth::user() == '' ? [] : User::where('user_id', Auth::user()->user_id)->get();
      //lấy sản phẩm mới nhất hiển thị cho page blog
      $product_news = Product::getProductNews(); 
      //compact:  cần chuyển nhiều mảng tới một page thì ta dùng
      return view($page, ['dataProduct'=> $products], compact('category', 'brands', 'product_news', 'user', 'price'));
   }
   public function searchProducts(Request $request)
   {
      $searchterm = $request->input('search');//truyền sản phẩm muốn tìm kiếm
      $searchProducts = Product::where('product_name','LIKE','%'.$searchterm.'%')->latest()->paginate(15);
      return view('pages.search', compact('searchProducts', 'searchterm'));
   }
   public function productDetail(Request $request, $id)
   {
      $user = Auth::user() == '' ? [] : User::where('user_id', Auth::user()->user_id)->get();
      // Query Lấy các product chi tiết
      $product_detail = Product::where('product_id', $id)->first();
      //All list
      $products = Product::all();
      return view('pages.products_detail', ['dataProduct'=> $products], compact('product_detail', 'user'));
   }
}
