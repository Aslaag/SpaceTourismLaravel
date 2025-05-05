<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Technology extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'description', 'image_mobile', 'image_desktop'];

    public static function boot()
    {
        parent::boot();

        static::creating(static function ($item) {
            $item->slug = Str::slug($item->name);
        });

        static::updating(static function ($item) {
            $item->slug = Str::slug($item->name);
        });
    }
}
