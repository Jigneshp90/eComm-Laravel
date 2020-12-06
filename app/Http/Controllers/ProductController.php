<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
}
