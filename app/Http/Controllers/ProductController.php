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
    public function __construct()  
    {  
      $this->uploadPath = public_path('assets/images/products');  
      $this->uploadFolder = 'public/assets/images/products/';  
    } 
    public function index()
    {
        //hien thi danh sach san pham
        $user = Auth::user() == '' ? [] : User::where('user_id', Auth::user()->user_id)->get();
        $products = Product::orderBy('product_id', 'desc')->paginate(15);
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
        
        $this->validate($request,[
            'product_price' => 'required|numeric',
            'product_qty' => 'required|numeric',
            'product_description' => 'required',
            'product_images_1' => 'required',
            'product_images_2' => 'required',
            'product_images_3' => 'required',
        ]);
        $product = new Product();

        $product ->product_name         = $request->product_name;
        $product ->product_price        = $request->product_price;
        $product ->product_qty          = $request->product_qty;
        $product ->category_id          = $request->category_id;
        $product ->brand_id             = $request->brand_id;
        $product ->product_description  = $request->product_description;
        $product ->product_status       = $request->product_status;
        $product ->product_images_1     = $request->product_images_1->getClientOriginalName();
        $product ->product_images_2     = $request->product_images_2->getClientOriginalName();
        $product ->product_images_3     = $request->product_images_3->getClientOriginalName();

        if($request->hasFile('product_images_1') || $request->hasFile('product_images_2') || $request->hasFile('product_images_3')) {
            $request->file('product_images_1')->move('assets/images/products/',  $request->product_images_1->getClientOriginalName());  //Lưu vào thư mục
            $request->file('product_images_2')->move('assets/images/products/',  $request->product_images_2->getClientOriginalName());  //Lưu vào thư mục
            $request->file('product_images_3')->move('assets/images/products/',  $request->product_images_3->getClientOriginalName());  //Lưu vào thư mục
        }
        if( $product->save()) {
            $flasher->addSuccess('Thêm sản phẩm thành công', 'Sunshine !');
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
        //Kiểm tra
        $this->validate($request,[
            'product_price' => 'required|numeric',
            'product_qty' => 'required|numeric',
            'product_description' => 'required',
        ]);
         // set ảnh sản phẩm, kiểm tra
         //Xác định file có trên request hay không bằng cách sử dụng phương thức hasFile:
        
        $data_edit = Product::findOrFail($id);
        $data_edit->product_name = $request->product_name;
        $data_edit->product_price = $request->product_price;
        $data_edit->product_price = $request->product_price;
        $data_edit->product_qty = $request->product_qty;
        $data_edit->category_id = $request->category_id;
        $data_edit->brand_id = $request->brand_id;
        $data_edit->product_description = $request->product_description;
        if($request->hasFile('product_images_1')) {
             $data_edit->product_images_1     = $request->product_images_1->getClientOriginalName();
             $request->file('product_images_1')->move('assets/images/products/',  $request->product_images_1->getClientOriginalName());  //Lưu vào thư mục
         }
        if($request->hasFile('product_images_2')) {
            $data_edit->product_images_2     = $request->product_images_2->getClientOriginalName();
            $request->file('product_images_2')->move('assets/images/products/',  $request->product_images_2->getClientOriginalName());  //Lưu vào thư mục
        }
        if($request->hasFile('product_images_3')) {
            $data_edit->product_images_3     = $request->product_images_3->getClientOriginalName();
            $request->file('product_images_3')->move('assets/images/products/',  $request->product_images_3->getClientOriginalName());  //Lưu vào thư mục
        }
       
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