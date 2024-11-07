<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $table = 'categories';
    protected $guarded = ['id'];

    public function details() {
        return $this->hasMany(CategoryDetail::class);
    }

    public function writer() {
        return $this->belongsTo(Writer::class);
    }

}
