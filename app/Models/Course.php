<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    protected $with = ['modules', 'user'];
    public $timestamps = false;
    

    public function scopeFilter($query, array $filters) 
    {
     
        $query->when($filters['modules'] ?? false, fn($query, $module) =>
            $query->whereHas('module', fn($query) => 
                $query->where('name', $module)
            )
        );

        $query->when($filters['user'] ?? false, fn($query, $user) =>
            $query->whereHas('user', fn($query) => 
                $query->where('name', $user)
            )
        );
    }


    //BINDINGS
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function modules()
    {
        return $this->belongsToMany(Module::class);
    }
    
}
