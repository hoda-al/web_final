<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masseges extends Model
{
    protected $fillable = ['full_name', 'email', 'phone_number','content_message'];
    use HasFactory;

}
