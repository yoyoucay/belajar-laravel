<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\BlogPosted;
use App\Models\Blog; // menambahkan Directory Models Blog kedalam BlogController

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(5);
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
      // Validation Form
      $this->validate($request, [
        'title'       => 'required|min:5',
        'description' => 'required|min:5',
        'featured_img' => 'mimes:jpeg,jpg,png|max:1000' // menentukan ukuran dan format file
      ]);

      $blog = new Blog;
      $blog->title = $request->title;
      $blog->description = $request->description;
      $blog->save();

      // Upload File
      $request->file('featured_img')->store('blog');
      dd('Berhasil! upload file');

      // Mengirim emails
      Mail::to('emailuser@lala.com')->send(new BlogPosted($blog));

      return redirect('blog');
      // return redirect()->route('test');
    }

    public function destroy($id){
      $blog = Blog::find($id)->delete();
      return redirect('blog');
    }

    public function testing(Request $request){
      if ($request->method() == "GET") {
        dd('ini adalah Method GET');
      }else {
        dd('ini adalah Method POST');
      }
    }

}
