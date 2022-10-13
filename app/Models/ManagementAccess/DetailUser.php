<?php

namespace App\Models\ManagementAccess;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'detail_users';  // point to table name

    protected $dates = [  // to save date format
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
