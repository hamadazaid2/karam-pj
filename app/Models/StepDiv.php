<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StepDiv extends Model
{
    use HasFactory;
    protected $table = 'steps_divs';
    protected $fillable = ['img', 'header', 'paragraph'];
    public $timestamps = false;
}
