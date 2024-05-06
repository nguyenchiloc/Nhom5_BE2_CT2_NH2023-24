<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Flasher\Prime\FlasherInterface;

class ReviewsController extends Controller
{
    public function create(Request $request, $product_id)
    {
        
        $user_id = Auth::user()->user_id;
        $product = Product::where('product_id', $product_id)->first();
        Review::create([
            'user_id' => $user_id,
            'product_id' => $product_id,
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);

        return  redirect()->back();
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
        $data_edit = Review::findOrFail($id);
        if($data_edit->user_id != Auth::user()->user_id){
            $flasher->addError('Fail !');
            return redirect()->back();
        }
        //Set nếu rating không đổi thì set rating = giá trị cũ
        if($request->rating == 0){
            $request->rating = $data_edit->rating;
        }
        $data_edit->rating = $request->rating;
        $data_edit->comment = $request->new_comment;
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
        $data_delete = Review::findOrFail($id);
        if( $data_delete->delete()) {
            $flasher->addSuccess('Delete success', 'Sunshine !');
        }else{
            $flasher->addError('Fail!');
        }
        return redirect()->back();
    }
}
