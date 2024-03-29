<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class id_card_report extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'ident_number',
        'reported_at',
    ];

    public $timestamps = false;
}
