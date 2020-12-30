<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'middle_name', 'last_name', 'dob', 'blood_group', 'mother_tongue', 'different_address'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function setUserNameAttribute(){
        if(auth()->user()->userType == 'student'){
            return auth()->id();
        }
    }
}
