<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerOpenionDiv extends Model
{
    use HasFactory;
    protected $table = 'customer_openion_divs';
    protected $fillable = ['img', 'header', 'header2', 'paragraph'];
    public $timestamps = false;
}
