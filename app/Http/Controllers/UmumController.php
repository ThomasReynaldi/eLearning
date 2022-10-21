<?php

namespace App\Http\Controllers;

use App\Models\Umum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UmumController extends Controller
{
    public function tp(){
        $title = 'Tipografi';
        return view('dashboard.master.umum.tp', compact('title'));
    }
}
