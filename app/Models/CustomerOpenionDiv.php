<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerOpenionDiv extends Model
{
    use HasFactory;
    protected $table = 'customer_openion_divs';
    protected $fillable = ['img', 'name', 'job_title', 'opinion'];
    public $timestamps = false;
}
