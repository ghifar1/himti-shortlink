<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as SqlModel;
use Jenssegers\Mongodb\Eloquent\Model;

class Shortlink extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'target'];
}
