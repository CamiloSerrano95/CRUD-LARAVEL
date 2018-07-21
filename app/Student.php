<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'identification', 'name', 'lastname', 'university',
    ];

    // Query Scope
    public function scopeIdentification($query, $identification) {
        if ($identification) {
            return $query->where('identification', 'LIKE', "%$identification%");
        }
    }

    public function scopeName($query, $name) {
        if ($name) {
            return $query->where('name', 'LIKE', "%$name%");
        }
    }

    public function scopeUniversity($query, $university) {
        if ($university) {
            return $query->where('university', 'LIKE', "%$university%");
        }
    }
}
