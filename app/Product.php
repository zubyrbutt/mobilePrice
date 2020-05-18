<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'company_id', 'mobileName', 'mobilePrice'
    ];



    public function company(){
        return $this->belongsTo(Company::class );
    }
}
