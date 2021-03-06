<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard () {
        return view('pages.dashboard-page');
    }

    public function accountSettings () {
        return view('pages.account-settings-page');
    }

    public function deposit () {
        return view('pages.deposit-page');
    }

    public function transactions () {
        return view('pages.transactions-page');
    }

    public function checkout () {
        return view('pages.checkout-page');
    }
}
