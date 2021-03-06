<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function presentDivision(){
        return $this->belongsTo(Division::class, 'presentDivision_id');
    }

    public function permanentDivision(){
        return $this->belongsTo(Division::class, 'permanentDivision_id');
    }

    public function presentDistrict(){
        return $this->belongsTo(District::class, 'presentDistrict_id');
    }

    public function permanentDistrict(){
        return $this->belongsTo(District::class, 'permanentDistrict_id');
    }

    public function presentUpozilla(){
        return $this->belongsTo(Upozilla::class, 'presentUpozilla_id');
    }

    public function permanentUpozilla(){
        return $this->belongsTo(Upozilla::class, 'permanentUpozilla_id');
    }

    public function branch(){
        return $this->belongsTo(Branch::class, 'branch_id');
    }
    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function duration(){
        return $this->belongsTo(Duration::class);
    }
}
