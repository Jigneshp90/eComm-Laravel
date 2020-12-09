@extends('master')
@section('content')

<div class="custom-product">
  <div class="col-sm-6">
    <table class="table table-striped">
    {{--       <thead>
            <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            </tr>
        </thead> --}}
        <tbody>
            <tr>
                <td>Price</td>
                <td>{{$total}} Rupees</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>0 Rupees</td>
            </tr>
            <tr>
                <td>Delivery Charges</td>
                <td>100</td>
            </tr>
            <tr>
            <td>Total Amout</td>
                <td>{{$total}}</td>
            </tr>
        </tbody>
    </table>
    <form action="orderplace" method="POST">
      @csrf
      <div class="form-group">
        <label for="">Address & Contact Details</label>
        <textarea class="form-control" placeholder="Enter Your Address" name="address"></textarea>
      </div>
      <div class="form-group">
          <label for="">Payment Methods</label>
          <p><input type="radio" value="cash" name="payment"><span>Online Payment</span></p>
          <p><input type="radio" value="cash" name="payment"><span>Credit Card Payment</span></p>
          <p><input type="radio" value="cash" name="payment"><span>Cash on Delivery</span></p>
      </div>
      <button type="submit" class="btn btn-success">Order Now</button>
    </form>
  </div>
</div>
@endsection
