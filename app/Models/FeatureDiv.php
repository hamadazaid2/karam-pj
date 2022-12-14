<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureDiv extends Model
{
    use HasFactory;
    protected $table = 'feature_divs';
    protected $fillable = ['i_tag', 'header', 'paragraph'];
    public $timestamps = false;
}
