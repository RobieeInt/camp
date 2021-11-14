<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Checkout\Paid;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function update(Request $request, Checkout $checkout) {

        $checkout->is_paid = true;
        $checkout->save();

        // kirim email ke user
        Mail::to($checkout->User->email)->send(new Paid($checkout));

        $request->session()->flash('success', "Checkout dengan ID [{$checkout->id}] atas nama [{$checkout->User->name}] Camp  [{$checkout->Camp->title}] Berhasil.");
        return redirect(route('admin.dashboard'));
    }
}
