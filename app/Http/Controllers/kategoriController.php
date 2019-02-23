<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kategoriController extends Controller
{
    public function daftar(Request $req)
    {
    	return view('admin.pages.kategori.daftar');
    }
}
