<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";

    public function author() {
      return $this->belongsTo('App\Author', 'author_id');
    }
}
