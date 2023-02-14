<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'intro_text', 
        'image',
        'full_text',
        'status',
        'meta_title',
        'meta_description'
    ];
    protected static function boot() {
        parent::boot();

        static::creating(function ($page) {
            $page->slug = Str::slug($page->title, '-');
        });
    }

    public function menu(): BelongsTo
    {
        return $this->belongsTo( Menu::class );
    }
    public function pageArticle()
    {
        return $this->hasMany( PageArticle::class );
    }
}
