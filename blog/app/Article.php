<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
      'name', 'description', 'category_id'  
    ];
    
    public function __construct(array $attributes = array()) {
        parent::__construct($attributes);
    }
    public function category() {
        return $this->hasOne('App\Category');
    }
    
}
