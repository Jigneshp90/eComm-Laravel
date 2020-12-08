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
    <form action="/action_page.php">
      <div class="form-group">
        <label for="">Address & Contact Details</label>
        <textarea class="form-control"></textarea>
      </div>
      <div class="form-group">
          <label for="">Payment Methods</label>
          <p><input type="radio" name="payment"><span>Online Payment</span></p>
          <p><input type="radio" name="payment"><span>Credit Card Payment</span></p>
          <p><input type="radio" name="payment"><span>Pay with Dabit Card</span></p>
          <p><input type="radio" name="payment"><span>Cash on Delivery</span></p>
      </div>
      <button type="submit" class="btn btn-success">Order Now</button>
    </form>
  </div>
</div>
@endsection
