<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvertiseLogo extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'logo'];
}
