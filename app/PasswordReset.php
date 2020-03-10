<?php

namespace HCES;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'email',
        'token',
        'created_at'
    ];
}
