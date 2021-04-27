<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    public $fillable = ['name', 'description'];

    public function grates()
    {
        return $this->hasMany('App\Models\Grate');
    }
}