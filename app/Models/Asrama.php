<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asrama extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'asrama';

    protected $fillable = [
        'name'
    ];
}
