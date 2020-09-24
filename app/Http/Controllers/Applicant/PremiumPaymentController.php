<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PremiumPaymentController extends Controller
{
    public function index(){
        return view('applicant/payment/premium-offer');
    }

    public function chooseMethod(){
        return view('applicant/payment/premium-payment-option');
    }

    public function paymentBankOption(){
        return view('applicant/payment/premium-bank-option');
    }

    public function paymentBankManual(){
        return view('applicant/payment/premium-bank-atm');
    }

    public function paymentBankEbanking(){
        return view('applicant/payment/premium-ebanking');
    }

    public function paymentCreditCard(){
        return view('applicant/payment/premium-credit-card');
    }

    public function paymentPulsa(){
        return view('applicant/payment/premium-pulsa');
    }

    public function paymentEmoney(){
        return view('applicant/payment/premium-emoney');
    }
}
