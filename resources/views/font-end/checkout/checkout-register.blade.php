@extends('font-end.master')
@section('body')
   <div class="container">
   	<div class="row">
   		<div class="col-md-7">
   			<h1 class= "text-center">Please register to checkout</h1>
   			<form action="{{route('checkout-sign-up')}}" method="post">
   				@csrf
   				<div class="form-group">
   					<label>First Name:</label>
   					<input type="text" name="first_name" class="form-control">
   				</div>
   				<div class="form-group">
   					<label>Last Name:</label>
   					<input type="text" name="last_name" class="form-control">
   				</div>
   				<div class="form-group">
   					<label>Email Address:</label>
   					<input type="text" name="email_address" class="form-control">
   				</div>
   				<div class="form-group">
   					<label>Phone No:</label>
   					<input type="number" name="phone_no" class="form-control">
   				</div>
   				<div class="form-group">
   					<label>Address:</label>
   					<textarea type="text" name="address" class="form-control"></textarea>
   				</div>
   				<div class="form-group">
   					<label>Password:</label>
   					<input type="password" name="password" class="form-control">
   				</div>
   				<div class="form-group">
   					<button type="submit" name="btn" class="btn-success">Register</button>
   				</div>
   			</form>
   		</div>
   		<div class="col-md-5">
   			<h1 class="text-center">Already a member?<br> Please login here!</h1>
   			<form action="" method="post">
   				<div class="form-group">
   					<label>Email Address:</label>
   					<input type="text" name="Email_address" class="form-control">
   				</div>
   				<div class="form-group">
   					<label>Password:</label>
   					<input type="password" name="password" class="form-control">
   				</div>
   				<div class="form-group">
   					<button  type="submit" name="btn" class="btn-success">Login</button>
   				</div>
   			</form>
   		</div>
   	</div>
   </div>
@endsection