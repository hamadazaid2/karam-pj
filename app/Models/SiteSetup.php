<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetup extends Model
{
    use HasFactory;
    protected $table = 'site_setup';
    protected $fillable = ['name', 'content'];
    public $timestamps = false;
}
