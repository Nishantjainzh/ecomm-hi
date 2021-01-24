<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Session;
use DB;

class ProductController extends Controller
{
    function index(){
    	$data = Product::all();
    	return view('product')->with(compact('data'));
    }
    function detail($id){
    	$detail = Product::find($id);
    	return view('detail')->with(compact('detail'));
    }
    function search(Request $request){
    	$data = Product::where('name','like','%'.$request->input('query').'%')->get();
    	return view('search')->with(compact('data'));
    }
    function addtocart(Request $request){
    	if($request->session()->has('user')){
    		$cart = new Cart;
    		$cart->user_id =$request->session()->get('user')['id'];
    		$cart->product_id = $request->product_id;
    		$cart->save();

    		return redirect('/');
    	}
    	else{
    		return redirect('/login');
    	}
    }
    public static function countItem(){
    	$userId = session()->get('user')['id'];
    	$data = Cart::where('user_id',$userId)->get();
    	return count($data);
    }

    public function cartItem(){
    	$userId = Session::get('user')['id'];
    	$data = DB::table('carts')
    		->join('products','carts.product_id','products.id')
    		->select('products.*')
    		->where('carts.user_id',$userId)
    		->get();

    	 //$totalitem= Cart::where('user_id',$userId)->where('product_id',$data->id)->get();
    	// 	return $totalitem;exit;
    	return view('cartItem')->with(compact('data'));
    		return $data;exit;
    }
    public function itemRemove(Request $request){
    	$userId = Session::get('user')['id'];
    	$itemRemove= Cart::where('user_id',$userId)->where('product_id',$request->product_id)->delete();
    	return redirect('/cartItem');
    }

}
