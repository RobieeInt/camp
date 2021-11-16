<?php

namespace App\Http\Controllers;

use App\Models\CampBenefit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Checkout;

class HomeController extends Controller
{
    public function dashboard() {

        //  $checkouts = Checkout::with('Camp')->whereUserId(Auth::id())->get(); //ambil checkout userid yang login
        // // return $checkouts;
        // return view('user.dashboard', [
        //     'checkouts' => $checkouts
        // ]);

        switch (Auth::user()->is_admin) {
            case true:
                return redirect(route('admin.dashboard'));
                break;

            default:
                return redirect(route('user.dashboard'));
                break;
        }
    }


}
