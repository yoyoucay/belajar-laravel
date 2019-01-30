<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Blog; // menambahkan Directory Models Blog kedalam BlogController

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
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

    public function edit($id)
    {
        $blog = Blog::find($id);

        // akan menampilkan not found jika $id tidak ditemukan
        if(!$blog)
          abort(404); // akan menampilkan notfound404 page

        return view('blog/edit', ['blog' => $blog]);
    }

    public function update(Request $request, $id){
      $blog = Blog::find($id);
      $blog->title = $request->title;
      $blog->description = $request->description;
      $blog->save();
      return redirect('blog/'.$id);
    }

    public function create()
    {
      return view('blog/create');
    }

    public function store(Request $request)
    {
      $blog = new Blog;
      $blog->title = $request->title;
      $blog->description = $request->description;
      $blog->save();

      return redirect('blog');
    }

    public function destroy($id){
      $blog = Blog::find($id)->delete();
      return redirect('blog');
    }

}
