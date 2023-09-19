<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donasiuangs extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','jenisDonor','idJenisDonor','email','donatur', 'nominalDonasi', 'pesan'];
        
}
