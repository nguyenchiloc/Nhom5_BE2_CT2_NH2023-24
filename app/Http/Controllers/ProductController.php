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
        $products = Product::paginate(15);
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
        $data = Product::findOrFail($id);
        return view('product.show', ['product'=> $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_news = Product::findOrFail($id);
        $category = Category::all(); //hiển thị danh sách loại sản phẩm
        $brands = Brand::all(); //hiển thị danh sách thương hiệu 
        return view('product.edit', ['product'=> $data_news], compact('category', 'brands'));
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
        $data_edit = Product::findOrFail($id);
        $data_edit->product_name = $request->product_name;
        $data_edit->product_price = $request->product_price;
        $data_edit->sale_price = $request->sale_price;
        $data_edit->product_qty = $request->product_qty;
        $data_edit->category_id = $request->category_id;
        $data_edit->brand_id = $request->brand_id;
        $data_edit->product_description = $request->product_description;
        $data_edit->product_images_1 = $request->product_images_1;
        $data_edit->product_images_2 = $request->product_images_2;
        $data_edit->product_images_3 = $request->product_images_3;
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
        //
        $data_delete = Product::findOrFail($id);
        if( $data_delete->delete()) {
            $flasher->addSuccess('Delete success', 'Sunshine !');
        }else{
            $flasher->addError('Fail!');
        }
        return redirect()->back();
    }
}