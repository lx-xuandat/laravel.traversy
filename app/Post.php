<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Ghi đè lại các field
     */

    // Table name
    protected $table = 'posts';

    //primary key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    /** 
     * one to one or many relationship.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
