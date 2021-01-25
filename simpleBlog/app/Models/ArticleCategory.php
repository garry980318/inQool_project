<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_article',
        'id_category'
    ];
    protected $table = 'article_categories';
    protected $primaryKey = ['id_article', 'id_category'];
    public $incrementing = false;

    protected function setKeysForSaveQuery(Builder $query)
    {
        $query
            ->where('id_article', '=', $this->getAttribute('id_article'))
            ->where('id_category', '=', $this->getAttribute('id_category'));
        return $query;
    }

    public function getCreatedAtAttribute($value)
    {
        return date('j M Y, G:i', strtotime($value));
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('j M Y, G:i', strtotime($value));
    }

    public function article()
    {
        $this->belongsTo('App\Article');
    }

    public function category()
    {
        $this->belongsTo('App\Category');
    }
}
