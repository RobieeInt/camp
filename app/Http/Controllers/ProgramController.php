<?php

namespace App\Http\Controllers;

use App\Models\Camp;
use Illuminate\Http\Request;
use App\Models\CampBenefit;

class ProgramController extends Controller
{
     public function program() {
        $camps = Camp::with('Campbenefit')->get(); //ambil array pertama
        // $campss = Camp::with('Campbenefit')->get(); //ambil array pertama
        // return $camps;
        return view('program', [
            'camps' => $camps,
            // 'campss' => $campss
        ]);
    }
}
