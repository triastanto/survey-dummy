<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ttc extends Model
{
    use HasFactory;

    protected $fillable = [
        'response_id', 'question_key', 'completion_time'
    ];

    public function response()
    {
        return $this->belongsTo(Response::class);
    }
}
