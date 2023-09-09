<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donasibarangs extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','jenisDonor','email','donatur', 'namaBarang', 'gambar', 'pesan'];
}
