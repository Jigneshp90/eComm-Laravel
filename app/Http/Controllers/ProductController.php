<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use App\Models\Product;
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
      /* $userId= Session::get('user')['id']; */
      $userId= session()->get('user')['id'];
      $data= DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*')
        ->where('cart.user_id',$userId)
        ->get();

        return view('cartlist',['products'=>$data]);
    }
}
