<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return '2241720047 <br> Aulia Firda Syafira';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}

