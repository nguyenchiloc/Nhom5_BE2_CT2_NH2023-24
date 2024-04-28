<?php

namespace App\Http\Controllers;
use App\Models\Price;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $price = Price::all(); //hiển thị danh sách loại sản phẩm
        //compact:  cần chuyển nhiều mảng tới một page thì ta dùng
        return  view('management.price', compact('price'));
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
    public function store(Request $request, FlasherInterface $flasher)
    {
        //
        $news = new Price;
        $inputs = $request->all(); 
        $news = Price::create($inputs);

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
        $price = Price::all(); //hiển thị danh sách loại sản phẩm
        //compact:  cần chuyển nhiều mảng tới một page thì ta dùng
        $price_data_old = Price::findOrFail($id);
        $price_data_old = Price::where('price_id', $price_data_old->price_id)->first();
        return  view('management.price', compact('price', 'price_data_old'));
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
        $data_edit = Price::findOrFail($id);
       

        $data_edit->price_name = $request->new_price_name;
        $data_edit->price_to = $request->new_price_to;
        $data_edit->price_from = $request->price_from;
        $data_edit->price_status = $request->new_price_status;
        
        //Xét điều kiện lấy lỗi
        if($request->new_price_to > $request->new_price_from){
            $flasher->addError('Price to < Price_from ! Please');
            $this->validate($request,[
                'new_price_to' => 'required|boolean',
                'new_price_from'     => 'required|boolean'
            ]);
            return response()->json($request->errors());
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
        $data_delete = Price::findOrFail($id);
        if( $data_delete->delete()) {
            $flasher->addSuccess('Delete success', 'Sunshine !');
        }else{
            $flasher->addError('Fail!');
        }
        return redirect()->back();
    }
}
