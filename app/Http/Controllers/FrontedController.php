<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontedController extends Controller
{
   public function index(){
    return view('Frontend.index');
}
   
public function ShopProduct(){
    return view('Frontend.shop');
}
public function CatagoryProduct(){
    return view('Frontend.catagory');
}

public function TypeProduct ($type)
{
    return view('Frontend.type', compact('type'));
}
public function ViewProduct(){
    return view('Frontend.view');
}
public function ReturnProduct(){
    return view('Frontend.return');
}
public function cheackOutProduct(){
    return view('Frontend.cheackout');
}
public function ditailsProduct(){
    return view('Frontend.details');
}
public function subcatagoryProduct(){
    return view('Frontend.sub-catagory');
}
public function thankyou(){
    return view('Frontend.thank-you');
}
public function privacypolicy(){
    return view('Frontend.privacy-policy');
}
public function tearmscondition(){
    return view('Frontend.tearms-conditions');
}
public function refundpolicy(){
    return view('Frontend.refund-policy');
}
public function paymentpolicy(){
    return view('Frontend.payment-policy');
}
public function aboutUs(){
    return view('Frontend.about-us');
}
public function contactUs(){
    return view('Frontend.contact-us');
}

}

