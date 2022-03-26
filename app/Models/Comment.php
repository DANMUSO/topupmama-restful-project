<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
    protected $quarded = [];

    protected $fillable = [
        'comment',
        'ipAddress',
        'book_isbn',
    ];
    protected $hidden = array(
        'updated_at',
        
    );
      public function book()
    {
        return $this->belongsTo(Book::class);
    }
}