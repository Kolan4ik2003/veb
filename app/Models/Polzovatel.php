<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polzovatel extends Model
{
    protected $table = "polzovatels";

    protected $fillable = [
        "username",
        "password",
        "phone_number",
    ];    
}