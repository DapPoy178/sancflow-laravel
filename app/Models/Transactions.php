<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'date',
        'desc',
        'total',
        'last_total_fund',
        'student_id',
        'status',
    ];
}
