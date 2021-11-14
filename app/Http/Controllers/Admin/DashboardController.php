<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard() {

        $checkouts = Checkout::with('Camp')->get(); //ambil semua data
        // return $checkouts;
        return view('admin.dashboard', [
            'checkouts' => $checkouts
        ]);
    }
}
