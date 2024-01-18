<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ["course", "year", "track", "favourite_sub"];
    use HasFactory;

    public function student() {
        return $this->belongsTo(Student::class);
    }
}
