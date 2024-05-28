<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return 'OK';
    }

    public function success(){
        return View('success');
    }

    public function cancel(){
        return 'OK';
    }

    public function checkoutpay(){
        return 'OK';
    }
}
