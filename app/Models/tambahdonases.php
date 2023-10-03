<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tambahdonases extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','jenisDonor','foto','namaDonasi', 'deskripsi','nominalDonasi','targetDonasi'];
}
