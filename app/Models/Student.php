<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ["name","age","gender"];
    use HasFactory;

    public function profile() {
        return $this->hasOne(Profile::class);
    }
}
