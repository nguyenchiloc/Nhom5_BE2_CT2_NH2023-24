<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class PagesController extends Controller
{
   public function page($page="index"){
      //$product = Product::getProduct();//Product::all();//Product::all()->take(6);  số lượng sản phẩm hiển thị
     // $product = Product::all()->sortBy("product_id")->take(6);
      $products = Product::all(); //hiển thị danh sách  sản phẩm
      $category = Category::all(); //hiển thị danh sách loại sản phẩm
      $brands = Brand::all(); //hiển thị danh sách thương hiệu 
      $product_news = Product::getProductNews(); //lấy sản phẩm mới nhất hiển thị cho page blog
      //compact:  cần chuyển nhiều mảng tới một page thì ta dùng
      return view($page, ['dataProduct'=> $products], compact('category', 'brands', 'product_news'));
   }
   public function searchProducts(Request $request)
   {
      $searchterm = $request->input('search');//truyền sản phẩm muốn tìm kiếm
      $searchProducts = Product::where('product_name','LIKE','%'.$searchterm.'%')->latest()->paginate(15);
      return view('pages.search', compact('searchProducts', 'searchterm'));
   }
   //  public function index(){
   //      return view('index');
   //   }
   //   public function products(){
   //      return view('pages.products');
   //   }
   //   public function contact(){
   //      return view('pages.contact');
   //   }
   //   public function about(){
   //      return view('pages.about');
   //   }
   //   public function blog(){
   //      return view('pages.blog') ;
   //   }
}
