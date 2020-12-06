@extends('master')
@section('content')

<div class="custom-product">

  <!-- Trending Products -->
  <div class="trending-wrapper">
    <div class="col-sm-4">
      <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
      <h3>Result for Products</h3>
      <div class="">
        @foreach ($products as $item)
            <div class="searched-item">
              <a href="detail/{{$item['id']}}">
              <img class="trending-img" src="{{$item['gallery']}}">
                <div class="">
                  <h4>{{$item['name']}}</h4>
                  <h4>{{$item['description']}}</h4>
                </div>
              </a>
          </div>
        @endforeach
    </div>
    </div>
</div>
@endsection
