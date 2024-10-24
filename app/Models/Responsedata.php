<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsedata extends Model
{
    use HasFactory;

    protected $fillable = [
        'response_id', 'question_key', 'answer_value'
    ];

    public function response()
    {
        return $this->belongsTo(Response::class);
    }
}
