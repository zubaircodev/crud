<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\Hospital;

class Area extends Model
{
    use HasFactory;
    protected $table="areas";
    protected $fillable=array('name','user_id');

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function hospital()
    {
        return $this->hasMany(Hospital::class);
    }

}
