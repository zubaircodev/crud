<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;
use App\Models\Hospital;

class City extends Model
{
    use HasFactory;
    protected $table="cities";
    protected $fillable=array('name');

    public function area()
    {
        //hasone, hasmany, belongsto, belongsToMany
        return $this->hasMany(Area::class);
    }
    public function hospital()
    {
        //hasone, hasmany, belongsto, belongsToMany
        return $this->hasMany(Hospital::class);
    }


}
