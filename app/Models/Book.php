<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function book_categories()
    {
        return $this->hasMany(BookCategory::class);
    }
    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
}
