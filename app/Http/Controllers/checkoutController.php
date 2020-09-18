<?php

namespace App\Http\Controllers;

use App\Customer;
use Mail;
use Session;
use App\Shipping;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        return view('font-end.checkout.checkout-register');
    }

    public function signUp(Request $request){
        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email_address = $request->email_address;
        $customer->phone_no = $request->phone_no;
        $customer->address = $request->address;
        $customer->password = bcrypt($request->password);
        $customer->save();

        $data = $customer->toArray();
        Mail::send('font-end.mails.welcome-mail',$data,function ($message) use ($data){
            $message->to($data['email_address']);
            $message->subject('Welcome to EShop');
        });
          
          $customerId = $customer->id;
          session ::put('customerId',$customerId);
          session ::put('customerName',$customer->first_name,$customer->last_name);
    	return redirect('checkout/shipping');
    	
    }
    public function shipping(){
    	$customer = customer::find(Session::get('customerId'));
    	return view('font-end.checkout.checkout-shipping',[
            'customer'=>$customer]);

    }
    public function saveShipping(Request $request){
      $shipping = new Shipping();
      $shipping->full_name = $request->full_name;
      $shipping->email_address = $request->email_address;
      $shipping->phone_no = $request->phone_no;
      $shipping ->address = $request->address;
      $shipping ->save();

       return redirect('/checkout/paymet');
    }
}
