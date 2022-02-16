<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class LeaderInformation extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'Name_Of_Leader',
        'Follown_Team_Num',
        'Censership_Team_Num'
    ];


    public function note()
    {
        return $this->belongsToMany(Role::class);
    }

}
