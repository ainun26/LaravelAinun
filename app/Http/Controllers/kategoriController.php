<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class kategoriController extends Controller
{
    public function daftar(Request $req)
    {
    	$data = Kategori::where('nama_kategori','like',"%{$req->keyword}%")
    			->paginate(1);

    	return view('admin.pages.kategori.daftar',['data'=>$data]);
    }
}
