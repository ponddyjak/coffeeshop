<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\order;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    //
    function index(){
        $data= Product::all();
        return view('product',['product' =>$data]);
    }
    function detail($id){
     $data =  Product::find($id);
     return view('detail',['product' => $data]);
    }
    function search(Request $req){
        $data = Product::where('name','like','%',$req->input('query'),'%')->get();
        return view('search',['product' =>$data]);
    }
    function addToCart(Request $req){
        if($req->session()->has('user')){
        $cart= new Cart;
        $cart->user_id=$req->session()->get('user')['id'];
        $cart->product_id=$req->product_id;
        $cart->save();
        return redirect('/');
        }else {
            return redirect('/login');
        }
    }
    static function cartItem(){
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function cartlist(){
        $userId=Session::get('user')['id'];
        $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id') 
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();
        return view('cartlist',['products'=>$products]);
    }
    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow(){
        $userId=Session::get('user')['id'];
        $total = $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id') 
        ->where('cart.user_id',$userId)
        ->sum('products.price');
        $address = User::where('id', $userId)->select('address')->get();
        // $address = DB::table('orders')->select('user_id', 'address')->get();
        //  return view('orderNow',['total'=>$total],['address'=>$address]);
         return view('orderNow',compact('total', 'address'));

       
    }
    function orderPlace(Request $req){
        $userId=Session::get('user')['id'];
        // $allCart=Cart::where('user_id',$userId)->get();
        // foreach($allCart as $cart){
                $order = new Order;
                $order -> product_id = $products;
                $order -> user_id = $userId;
                $order -> status = "Pending";
                $order -> payment_method = $req->payment;
                $order -> payment_status = "Pending";
                $order -> address=$req->address;
                $order -> save();
                // Cart::where('user_id',$userId)->delete();
        // }
        $req->input();
        return redirect('/');
     
    }
    function myOrders(){
        $userId=Session::get('user')['id'];
        $orders=DB::table('orders')
        ->join('products','orders.product_id','=','products.id') 
        ->where('orders.user_id',$userId)
        ->get();

         return view('myOrders',['orders'=>$orders]);
    }
}
