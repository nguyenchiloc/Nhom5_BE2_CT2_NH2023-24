<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\User;
use Flasher\Prime\FlasherInterface;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //hien thi danh sach san pham
        if(Auth::user() == ''){
            $user = [];
        }else{
            //hiển thị tên tài khoản đăng nhập
            $user = User::where('user_id', Auth::user()->user_id)->get();
        }
        $products = Product::all();
        $category = Category::all(); //hiển thị danh sách loại sản phẩm
        $brands = Brand::all(); //hiển thị danh sách thương hiệu 
        $product_news = Product::getProductNews(); //lấy sản phẩm mới nhất hiển thị cho page blog
        //compact:  cần chuyển nhiều mảng tới một page thì ta dùng
        return view('product.index', ['dataProduct'=> $products], compact('category', 'brands', 'product_news', 'user'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::all(); //hiển thị danh sách loại sản phẩm
        $brands = Brand::all(); //hiển thị danh sách thương hiệu 
        return view('product.create', compact('category', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, FlasherInterface $flasher)
    { 
        $news = new Product;
        $inputs = $request->all(); 
        $news = Product::create($inputs);

        if( $news->save()) {
            $flasher->addSuccess('Create success', 'Sunshine !');
        }else{
            $flasher->addError('Fail !');
        }
       //return  redirect()->action('App\Http\Controllers\ProductController@create');
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
        $data = Product::where('product_id', $id)->first();
        return view('product.show', ['product'=> $data]);
        //return redirect(route('product.index'));
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
    public function update(Request $request, $id, FlasherInterface $flasher)
    {
        // $data                   = $request->all();
        // $product                = Product::find($id);
        // $product->category_id   = $data['category_id'];
        // $product->title         = $data['title'];
        // $product->description   = $data['description'];
        // $product->cost_price    = $data['cost_price'];
        // $product->price         = $data['price'];

        // if( $product->save() ) {
        //     $flasher->addSuccess('Updated success', 'Sunshine !');
        // }
        // return redirect(route('product.edit'));
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
