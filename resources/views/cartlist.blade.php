@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-10">
      <h2>Cart List</h2>
      <div class="">
        @foreach ($products as $item)
            <div class="row search-item cart-list-devider">
              <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                  <img class="detail-img" src="{{$item->gallery}}">
                  </a>
              </div>
              <div class="col-sm-3">
                    <div class="">
                      <h3>{{$item->name}}</h3>
                      <h4>{{$item->description}}</h4>
                    </div>
                <button class="btn btn-success">Proceed to Checout</button>
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove from Cart</a>
              </div>
          </div>
        @endforeach
    </div>
    </div>
</div>
@endsection
