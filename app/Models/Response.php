<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $fillable = [
        'survey_id', 'finished', 'person_id', 'language', 'single_use_id'
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function responseData()
    {
        return $this->hasMany(Responsedata::class);
    }

    public function meta()
    {
        return $this->hasOne(Meta::class);
    }

    public function ttc()
    {
        return $this->hasMany(Ttc::class);
    }
}
