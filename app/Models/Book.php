<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Publisher;
use App\Models\AdditionalBookinfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $guard = [];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function additionalBookinfo()
    {
        return $this->hasOne(AdditionalBookinfo::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'book_categories');
    }
}