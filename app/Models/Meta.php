<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;

    protected $fillable = [
        'response_id', 'url', 'action', 'source', 'user_agent'
    ];

    protected $casts = [
        'user_agent' => 'array'
    ];

    public function response()
    {
        return $this->belongsTo(Response::class);
    }
}
