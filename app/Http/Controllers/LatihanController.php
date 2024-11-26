<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //method atau function : kebisaan/kemampuan/fungsi
    //public - bisa dilihat secara umum
    //visibility : public, privat (tidak bisa dipakai di luar kelas), static
    public function index()
    {
        return "Halo kami sedang belajar Laravel";
    }

    public function edit($id)
    {
        return "Ini adalah form edit dengan nama params:" . $id;
    }

    public function delete($id)
    {
        return "Ini adalah form delete dengan id:" . $id;
    }
}
