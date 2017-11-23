<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sound extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sounds';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'category', 'author_id', 'thumbail'];

    public function authors()
	{
		return $this->belongsTo('App\Author');
	}
	
}
