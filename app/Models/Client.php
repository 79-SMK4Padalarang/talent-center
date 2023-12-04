<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'client';
    protected $primaryKey = 'client_id';
    protected $guarded = 'client_id';
    protected $foreignId = 'user_id';
    protected $connection = 'pgsql';


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
