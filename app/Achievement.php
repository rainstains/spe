<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = [
        'name','date','confirm', 'status', 'period', 'extracurricular_id',
    ];

    public function extracurricular(){
        return $this->belongsTo('App\Extracurricular');
    }
}
