<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecentNews extends Model
{
    use HasFactory;
    protected $fillable = ['type', 'title', 'photo'];
}
