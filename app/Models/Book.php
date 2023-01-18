<?php

namespace App\Models;

use App\Models\Author;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\AdditionalBookinfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
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