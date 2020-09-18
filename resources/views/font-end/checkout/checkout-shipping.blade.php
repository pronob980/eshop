@extends('font-end.master')

@section('body')

<div class="container">
   	<div class="row">
   		<div class=" offset-2 col-md-8">
   			<h1 class= "text-center"> Dear {{session::get('customerName')}} <br>Please provide your Shipping info!</h1> 
   			<small class="text-danger">*if you change the shipping info edit the form</small>
   			<form action="{{route('new-shipping')}}" method="post">
   				@csrf
   				<div class="form-group">
   					<label>Full Name:</label>
   					<input type="text" name="full_name" class="form-control" value="{{$customer->first_name.' '.$customer->last_name}}">
   				</div>
   				
   				<div class="form-group">
   					<label>Email Address:</label>
   					<input type="text" name="email_address" class="form-control" value="{{$customer->email_address}}">
   				</div>
   				<div class="form-group">
   					<label>Phone No:</label>
   					<input type="number" name="phone_no" class="form-control" value="{{$customer->phone_no}}">
   				</div>
   				<div class="form-group">
   					<label>Address:</label>
   					<textarea type="text" name="address" class="form-control"> {{$customer->address}}</textarea>
   				</div>
   				
   				<div class="form-group">
   					<button type="submit" name="btn" class=" btn btn-lg btn-success">Save Shipping info!</button>
   				</div>
   			</form>
   		</div>
   		
   	</div>
   </div>
@endsection