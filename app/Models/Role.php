<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    /**
     * The roles that belong to the Roles
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    protected $fillable= ['role_name'];
    
    public function users()
    {
        return $this->belongsToMany(User::class,'role_user_pivot');
    }
}
