<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // protected $table = 'ngasal'  untuk mengurus table yang bernama "Ngasal",
    // jika sama makan tidak perlu di buat variable Table lagi.

    public $timestamps = false; // mengeblok field created_at dan updated_at.
}
