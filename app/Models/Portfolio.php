<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Portfolio extends Model implements HasMedia

{
    use InteractsWithMedia;
    protected $guarded = [];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            if (!$project->slug) {
                $project->slug = Str::slug($project->category);
            }

        });


        static::updating(function ($project) {
            if ($project->isDirty('category')) {
                $project->slug = Str::slug($project->category);
            }
        });
    }
}
