<?php

namespace App\Http\Controllers\Perusahaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PremiumPaymentPerusahaanController extends Controller
{    

    public function chooseMethod(){
        return view('perusahaan/payment/premium-payment-option-perusahaan');
    }

    public function paymentBankOption(){
        return view('perusahaan/payment/premium-bank-option-perusahaan');
    }

    public function paymentBankManual(){
        return view('perusahaan/payment/premium-bank-atm-perusahaan');
    }

    public function paymentBankEbanking(){
        return view('perusahaan/payment/premium-ebanking-perusahaan');
    }

    public function paymentCreditCard(){
        return view('perusahaan/payment/premium-credit-card-perusahaan');
    }

    public function paymentPulsa(){
        return view('perusahaan/payment/premium-pulsa-perusahaan');
    }

    public function paymentEmoney(){
        return view('perusahaan/payment/premium-emoney-perusahaan');
    }
}
