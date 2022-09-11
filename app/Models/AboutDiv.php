<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutDiv extends Model
{
    use HasFactory;
    protected $table = 'about_divs';
    protected $fillable = ['i_tag', 'header', 'paragraph'];
    public $timestamps = false;
}
