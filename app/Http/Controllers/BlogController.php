<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Blog; // menambahkan Directory Models Blog kedalam BlogController

class BlogController extends Controller
{
    public function index()
    {

      // insert biasa
      // $blog = new Blog;
      // $blog->title = 'hari ketiga';
      // $blog->description = 'Hmmm hari ini aku sedikit ceria, karena hal sesuatu.. ';
      // $blog->save();

      // insert Mass Assigment
      // Blog::create([
      //   'title' => 'Hari kedelapan',
      //   'description' => 'Hmm capek habis kerja langsung hmmm',
      //   'created_at' => '2018-01-30 16:48:49',
      //   'updated_at' => '2018-01-30 16:48:49'
      // ]);

      // Update
      // $blog = Blog::where('title', 'hari kelima')->first();
      // $blog->title = 'hari kelima 1';
      // $blog->save();

      // // update mass assignment
      // Blog::find(28)->update([
      //   'title' => 'Hari kelima 2',
      //   'description' => 'ini isi dari hari kelima 2'
      // ]);

      // Delete biasa
      // $blog = Blog::find(29)->delete();

      // Delete keren
      // Blog::destroy(28); delete 1 data
      // Blog::destroy([30, 31]);

      // SoftDeletes
      // $blog = Blog::find(5)->delete();


      // return SoftDeletes
      Blog::withTrashed()->restore();

      $blogs = Blog::all(); // akan menampilkan semua data , kecuali yang sudah terhapus pada web.
      // $blogs = Blog::withTrashed()->get(); // akan mengembalikan data yang sudah terhapus pada web.
      // DB::table('blogs')->where('id', '>' , '5')->delete();
        return view('blog/home', ['blogs' => $blogs]);
    }

    public function show($id)
    {
        $blog = Blog::find($id);

        // akan menampilkan not found jika $id tidak ditemukan
        if(!$blog)
          abort(404); // akan menampilkan notfound404 page

        return view('blog/single', ['blog' => $blog]);
    }
}
