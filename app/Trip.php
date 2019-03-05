<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{

	protected $fillable = [
		'theme',
		'title',
		'description',
		'favorite_place',
		// 'travel_time',
		'average_price',
		'transportation',
	];

	public function user() {
		return $this->belongsTo(User::class);
	}

}
