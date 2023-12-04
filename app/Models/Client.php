<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Client extends Model
{
    use HasFactory;

    protected $table = 'client';
    protected $primaryKey = 'client_id';
    protected $guarded = 'client_id';
    protected $foreignId = 'user_id';
    protected $connection = 'pgsql';

    protected $fillable = [
        'client_id','user_id','client_name', 'sex', 'birth_date','email','client_position_id', 'agency_name', 'agency_address'
    ];


    public $timestamps = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Uuid::uuid4();
        });
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
