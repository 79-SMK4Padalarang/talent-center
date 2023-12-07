<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Ptags extends Model
{
    use HasFactory;
    protected $table = 'most_frequent_skillset';
    protected $connection = 'pgsql';
    protected $primaryKey = 'most_frequent_skillset_id';
    protected $fillable = ['most_frequent_skillset_id','skillset_id', 'counter' /* other fillable fields */];
    const CREATED_AT = 'created_time';
    const UPDATED_AT = 'last_modified_time';
    public function skillsets()
    {
        return $this->belongsTo(Skillset::class,'skillset_id');
    }
}
