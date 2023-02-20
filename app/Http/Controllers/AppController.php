<?php

namespace App\Http\Controllers;

use App\Models\Cloting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends Controller
{   
    public function index() {
        $clothings = Cloting::all();
        return view('user.index', [
            'clothings' => $clothings,
            'title' => 'Fashion Shop - XII SIJA 1',
        ]);
    }
}
