<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table = 'tbl_users';
    protected $fillable = [
        'name', 'gender', 'phone', 'email', 'address', 'nationality', 'date_of_birth', 'education', 'preferred_mode_contact', 
    ];
}
