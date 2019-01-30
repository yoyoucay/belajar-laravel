<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog/home');
    }

    public function show($id)
    {
        $nilai = "Ini adalah linknya ".$id;
        $user = "Arif Febriana";
        $unescape = '<script>alert("WARNINGS!")</script>';
        $job = ['Back-end', 'Mahasiswa terbgsd', 'Coolest man', 'ngeue'];
        return view('blog/single', ['blog' => $nilai, 'user' => $user, 'pekerjaan' => $job, 'unescape' => $unescape]);
    }
}
