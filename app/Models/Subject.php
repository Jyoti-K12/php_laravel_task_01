<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public function languages()
    {
        return $this->belongsToMany(Language::class, 'language_subjects',  'language_id', 'subject_id');
    }
}
