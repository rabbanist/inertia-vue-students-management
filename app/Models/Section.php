<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;
    
    protected $fillable = ['name','class_id'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function class()
    {
        return $this->belongsTo(CLasses::class, 'class_id');
    }
}
