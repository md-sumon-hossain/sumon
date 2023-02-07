<?php

namespace App\Models;

use App\Models\Work;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WorkDetails extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function workRelation(){
        return $this->belongsTo(Work::class,'work_id','id');
    }
}
