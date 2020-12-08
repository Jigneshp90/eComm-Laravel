@extends('master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <img class="detail-img" src="{{$products['gallery']}}" alt="{{$products['name']}}">
    </div>
    <div class="col-sm-6">
      <a href="/">Go Back</a>
      <h2>Product Name: {{$products['name']}}</h2>
      <h3>Product Price: {{$products['price']}}</h3>
      <h4>Product Category: {{$products['category']}}</h4>
      <h4>Product Description: {{$products['description']}}</h4>
      <br><br>
      <form action="/add_to_cart" method="POST">
      <input type="hidden" name="product_id" value="{{$products['id']}}">
      @csrf
        <button class="btn btn-success">Add to Cart</button>
      </form>
      <br><br>
      <button class="btn btn-primary">Buy Now</button>
    </div>
  </div>
</div>

@endsection
