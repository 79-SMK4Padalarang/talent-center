<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentMetadata extends Model
{
    use HasFactory;

    protected $table = 'talent_metadata';
    protected $connection = 'pgsql';
    protected $primaryKey = 'talent_id';
    protected $guarded = [];
    protected $keyType = 'string';
    const CREATED_AT = 'created_time';
    const UPDATED_AT = 'last_modified_time' ;

    public function talents() 
    {
        return $this->belongsTo(Talent::class, 'talent_id');
    }
}
