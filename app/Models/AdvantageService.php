<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdvantageService extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public $table = 'advantage_service';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'service_id',
        'advantage',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function service()
    {
        return $this->belongsTo('App\Models\Service', 'users_id', 'id');
    }
}
