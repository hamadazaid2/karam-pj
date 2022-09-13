<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsMessages extends Model
{
    use HasFactory;
    protected $table = 'contact_us_messages';
    protected $fillable = ['name', 'email', 'phone', 'message'];
    protected $hidden = ['created_at', 'updated_at'];
    public $timestamps = false;
}
