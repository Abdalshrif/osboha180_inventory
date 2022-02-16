<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
      'Week_Number',
      'Date_Of_Week',
    ];


    // public function weekNum()
    // {
    //     return $this->belongsTo('App\Models\Note');
    // }
}
