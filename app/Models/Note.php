<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
      'leader',
      'week',
    ];


    public function leader()
    {
        return $this->hasMany('App\Models\LeaderInformation', 'Name_Of_Leader');
    }

    public function week()
    {
        return $this->hasMany('App\Models\Week', 'Week_Number');
    }


}
