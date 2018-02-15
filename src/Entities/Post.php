<?php

namespace Rimorsoft\Rimback\Entities;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use HasSlug;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'slug',
        'excerpt',
        'body',
        'type',
        'image',
        'tooltip',
        'order',
        'status',
        'meta_title',
        'meta_description',
    ];

    /**
     * Genera el slug 
     * @return string
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->allowDuplicateSlugs()
            ->doNotGenerateSlugsOnUpdate();
    }   
    
    /**
     * 
     *  @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }     
}
