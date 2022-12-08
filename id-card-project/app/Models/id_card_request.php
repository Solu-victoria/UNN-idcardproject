<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class id_card_request extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'ident_number',
        'student-type',
        'address',
        'request_date',
    ];

    public $timestamps = false;
}
