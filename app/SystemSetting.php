<?php

namespace HCES;

use Illuminate\Database\Eloquent\Model;

class SystemSetting extends Model
{
    protected $fillable = [
        'organization_name',
        'organization_website'
    ];
}
