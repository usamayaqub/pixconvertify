<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Format extends Model
{
    use HasFactory;

    protected $fillable = [
        'meta_title',
        'meta_desc',
        'name',
        'from',
        'to',
        'badge',
        'heading',
        'banner_text',
        'section_heading',
        'slug',
        'status',
    ];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = $model->generateUniqueSlug($model->from, $model->to);
        });

        static::saving(function ($model) {
            $model->slug = $model->generateUniqueSlug($model->from, $model->to);
        });

        static::updating(function ($model) {
            $model->slug = $model->generateUniqueSlug($model->from, $model->to);
        });
    }

    public function generateUniqueSlug($from, $to)
    {
        $baseSlug = Str::slug($from . '-to-' . $to);
        $slug = $baseSlug;
        $count = 2;

        while (static::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $count++;
        }

        return $slug;
    }

    public function content()
    {
        return $this->hasMany(FormatContent::class, 'format_id', 'id');
    }
}
