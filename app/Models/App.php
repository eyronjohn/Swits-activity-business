<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;

    protected $fillable = ['app_name', 'api_key'];

    protected $casts = [
        'api_key' => 'encrypted'
    ];
}
