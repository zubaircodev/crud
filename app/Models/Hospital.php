<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;
use App\Models\City;

class Hospital extends Model
{
    use HasFactory;

    protected $table="hospitals";
    protected $fillabele=array('name','address','lat','long','city_id','area_id');

    public function area()
    {
        //hasone, hasmany, belongsTo, belongsToMany
        return $this->belongsTo(Area::class);
    }
    public function city()
    {
        //hasone, hasmany, belongsto, belongsToMany
        return $this->belongsTo(City::class);
    }
}
