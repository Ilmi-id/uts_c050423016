<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    //
    use HasFactory;

    // Tambahkan kolom yang bisa diisi secara massal
    protected $fillable = ['name', 'slug', 'description', 'amount'];
}
