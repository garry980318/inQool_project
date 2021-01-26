<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $table = 'categories';
    protected $primaryKey = 'id_category';

    public function getCreatedAtAttribute($value)
    {
        return date('j M Y, G:i', strtotime($value));
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('j M Y, G:i', strtotime($value));
    }

    public function articlecategory()
    {
        return $this->hasMany('App\ArticleCategory');
    }
}
