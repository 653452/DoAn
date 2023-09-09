<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function viewHome()
    {
        return view('Admin.Share.Master_page');
    }
}
