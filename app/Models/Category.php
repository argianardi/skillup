<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    // Mass Assignment
    // Cara 1
    protected $fillable = [
        'name',
        'slug',
        'icon'
    ];

    // Cara 2
    // protected $guarded = [
    //     'id'
    // ];

    // Relasi
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
