<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    public $timestamps = false;
    
    //filter by module from request
    public function scopeFilter($query, array $filters) 
    {
        if($filters['module'] ?? false) {
            $query->where('modules', 'like', '%' . request('module') . '%');
        }
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function addModule($module)
    {
        $this->modules()->create($module);
    }
}
