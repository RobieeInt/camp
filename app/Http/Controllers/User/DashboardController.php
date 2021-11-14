<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard() {

        $checkouts = Checkout::with('Camp')->whereUserId(Auth::id())->get(); //ambil checkout userid yang login
        // return $checkouts;
        return view('user.dashboard', [
            'checkouts' => $checkouts
        ]);
    }
}
