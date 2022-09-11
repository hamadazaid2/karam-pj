<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    use HasFactory;

    protected $table = 'main';
    protected $fillable = ['name', 'text'];
    public $timestamps = false;
}
