<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CrewMember extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'role', 'bio', 'image'];

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
