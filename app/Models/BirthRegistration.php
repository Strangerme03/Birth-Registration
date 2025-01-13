<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BirthRegistration extends Model
{
    protected $fillable = [
        'first_name',         // Child's First Name
        'last_name',          // Child's Last Name
        'dob',                // Date of Birth
        'place_of_birth',     // Place of Birth
        'parent_first_name',  // Parent's First Name
        'parent_last_name',   // Parent's Last Name
        'contact_email',      // Contact Email
        'address',            // Address
        'user_id',            // Foreign Key to Users Table
        'token',              // Unique Token
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
