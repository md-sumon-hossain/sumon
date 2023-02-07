<?php

namespace App\Models;

use App\Models\WorkDetails;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Work extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function workRelation(){
        return $this->hasMany(WorkDetails::class,'work_id','id');
    }
}
