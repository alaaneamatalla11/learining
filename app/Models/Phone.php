<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
  /**
         * Get the user associated with the phone
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasOne
         */
        public function user()
        {
            return $this->belongsTo(User::class);
        }
    }

