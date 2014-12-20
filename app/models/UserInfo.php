<?php

class UserInfo extends \Eloquent {

	/**
	 * What table are we using for this
	 *
	 * @var string
     */
	protected $table = 'users_info';

	/**
	 * This is the avaliable fields in the table
	 *
	 * @var array
     */
	protected $fillable = [
		'user_id',
		'personal_code_number',
		'address',
		'city',
		'income'
	];

	/**
	 * This object always belongs to a User
     */
	public function user()
	{
		return $this->belongsTo('User', 'id', 'user_id');
	}
}