<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'location','country', 'about', 'featured_event',
        'language', 'food', 'departure_date', 'duration',
        'type', 'price'
    ];

    protected $hidden = [
        
    ];
    protected $table = 'travel_packages';
    
    public function galleries(){
        return $this->hasMany(Gallery::class, 'travel_packages_id', 'id');
    }

}
