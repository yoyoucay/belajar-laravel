<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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

/* QUERY Create , Update , Delete */
        // insert queries
        // DB::table('users')->insert([
        //   ['username' => 'Arif Febriana', 'password' => '123456']
        // ]);

        // Update Queries
        // DB::table('users')->where('id', '3')->update(
        //   ['username' => 'Arif Ganteng', 'password' => 'lala123']
        // );

        // Delete queries
        // DB::table('users')->where('id', '>' , '2')->delete();
        // Queri ini akan menghapus akun yang ID nya lebih dari 2.


/* QUERY untuk menampilkan data */

        // Menampilkan semua data pada table Users
        $users = DB::table('users')->get();

        // Menampilkan data Lebih spesifik berdasarkan Username
        // $users = DB::table('users')->where('username', 'arif')->get(); menggunakan query builder WHERE

        // laravel.com/docs/5.3/queries for more info about Queries

        // dd($users); fungsinya sama seperti die(var_dump())
        $unescape = '<script>alert("WARNINGS!")</script>';
        return view('blog/single', ['blog' => $nilai, 'users' => $users, 'unescape' => $unescape]);
    }
}
