<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommitteeMember extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'designation', 'committee_id', 'photo'];

    public function committee(){
        return $this->belongsTo(Committee::class, 'committee_id');
    }
}
