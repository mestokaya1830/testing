<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    use HasFactory;
    protected $cast=['langs'=>'array'];
    protected $guarded = ['password_confirmation'];
    public function setLangsAttribute($value)
    {
        $this->attributes['langs'] = json_encode($value);
    }

    public function getLangsAttribute($value)
    {
        return $this->attributes['langs'] = json_decode($value);
    }
}
