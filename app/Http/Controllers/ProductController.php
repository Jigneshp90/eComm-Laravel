<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
/* use Session; */
use App\Models\Product;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index()
    {
      $data= Product::all();
      return view('products',['products'=>$data]);
    }
    function detail($id)
    {
      $data= Product::find($id);
      return view('detail',['products'=>$data]);
    }
    function search(Request $req)
    {

      /* return $req->input(); */
      $data= Product::
      where('name', 'like', '%'.$req->input('query').'%')
      ->get();
      return view('search',['products'=>$data]);
    }
    function AddToCart(Request $req)
    {
      if($req->session()->has('user'))
      {
        $cart= new Cart;
        $cart->user_id=$req->session()->get('user')['id'];
        $cart->product_id=$req->product_id;
        $cart->save();
        return redirect('/cartlist');
      }
      else
      {
        return redirect('/login');
      }
    }
    public static function cartItem()
    {
      $userId= session()->get('user')['id'];
      return Cart::where('user_id',$userId)->count();
    }
    function cartList()
    {
      $userId= session()->get('user')['id'];
      $data= DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$userId)
        ->get();

        return view('cartlist',['products'=>$data]);
    }
    function removeCart($id)
    {
      Cart::destroy($id);
      return redirect()->back();
    }
    public function orderNow()
    {
      $userId= session()->get('user')['id'];
      $total= DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req)
    {
      $userId= session()->get('user')['id'];
      $allCart= Cart::where('user_id',$userId)->get();
      foreach ($allCart as $cart)
      {
        $order= new Order;
        $order->product_id=$cart['product_id'];
        $order->user_id=$cart['user_id'];
        $order->address=$req->address;
        $order->status="pending";
        $order->payment_method=$req->payment;
        $order->payment_status="pending";
        $order->save();
      }
      Cart::where('user_id',$userId)->delete();
      return redirect('/');
      /* return $req->input(); */
    }
}
