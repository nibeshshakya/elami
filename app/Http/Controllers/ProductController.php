<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

use DB;

class ProductController extends Controller
{
    //




    /**
     * @return \Exception
     */

    public function showProductForm(){
        return view('product.create');
    }
    public function insertProduct(Request $request){
        try{
            $productObj = new product();
            $productObj->name = $request->input('name');
            $productObj->title = $request->input('title');
            $productObj->category = $request->input('category');
            $productObj->price = $request->input('price');
            $productObj->image = $request->input('image');
            $productObj->detail = $request->input('detail');

//            print_r($productObj);die();
            $productObj->save();

            if($productObj->save()){
                return redirect()->route('listproduct')->with(['message' => 'Your Data is been added successfully']);
            }

        }catch(\Exception $e){
            return $e;
        }
    }

    public function showIndex(){
        try{
            $result = product::all();
//            print_r($result);die();

            if(count($result) == 0){
                return view('product.index')->with(['message' => 'Database is empty']);
            }else{
                return view('product.index')->with(['products' => $result]);
            }


        }catch(\Exception $e){

        }

    }

    public function getSingleProduct($id){
        try{
            $result = product::find($id);
            print_r($result);die();

           /* if(count($result) == 0){
                return view('product.edit')->with(['message' => 'Database is empty']);
            }else{
                return view('product.edit')->with(['product' => $result]);
            }*/
        }catch(\Exception $e){
            print_r($e);
        }
    }


    public function updateProduct(Request $request){
        try{
            $id = $request->get('id');

            $productObj = product::find($id);

            $productObj->name = $request->input('name');
            $productObj->title = $request->input('title');
            $productObj->category = $request->input('category');
            $productObj->price = $request->input('price');
            $productObj->image = $request->input('image');
            $productObj->detail = $request->input('detail');

//            print_r($productObj);die();
            $productObj->save();

            if($productObj->save()){
                return redirect()->route('listproduct')->with(['message' => 'Your Data is been updated successfully']);
            }

        }catch(\Exception $e){
            return $e;
        }
    }


    public function deleteProduct($id){
        try{
            DB::table('product')->where('id', '=', $id)->delete();
            return redirect()->route('listproduct')->with(['message' => 'Your Data is been Deleted successfully']);

        }catch(\Exception $e){
            print_r($e);
        }
    }
}
