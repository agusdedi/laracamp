<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Checkout;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        $checkout = Checkout::with('Camp')->whereUserId(Auth::id())->get();
        return view('user.dashboard', [
            'checkouts' => $checkout
        ]);
    }
}
