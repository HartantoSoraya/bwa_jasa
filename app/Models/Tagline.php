<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tagline extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public $table = 'tagline';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'users_id',
        'title',
        'description',
        'delivery_time',
        'revision_limit',
        'price',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    
    public function service()
    {
        return $this->belongsTo('App\Models\Service', 'users_id', 'id');
    }
}
