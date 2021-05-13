@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table table-striped">
           
            <tbody>
            
              <tr>
                <td>Amount</td>
                <td>฿ {{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>฿ {{$total*7/100}}</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>฿ 10</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>฿ {{$total+10}}</td>
               
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                  <label for="pwd">Shipping Address</label> <br> <br>
                  <select name="address" >
                    <option name="address" value="">-- Address --</option>
                    <option name="address" value="{{ $address }}">{{ $address }}</option>
                    <option name="address" value=""></option>
                
                </select>
                <br><br>
                  <textarea name="address" placeholder="Enter your address" class="form-control" ></textarea> 
                  </div>

                <div class="form-group">
                  <label for="pwd">Payment Method  </label> <br> <br>
                  <input type="radio" value="Online Payment" name="payment"><span>: Online Payment</span><br> <br>
                  <input type="radio" value="Mobile Banking" name="payment"><span>: Mobile Banking</span><br> <br>
                  <input type="radio" value="Cash on Delivery" name="payment"><span>: Cash on Delivery</span><br> <br>
                  <input type="radio" value="Credit or Debit Card" name="payment"><span>: Credit or Debit Card</span><br> <br>
                </div>
                <button type="submit" class="btn btn-success">Order Now</button>
              </form>
          </div>
    </div>
</div>
@endsection