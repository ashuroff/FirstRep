<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable =[
        'first_name',
        'last_name',
        'email',
        'city',
        'country',
        'job_title' 
    ];

    public function jobs()
    {  
        return $this->belongsToMany(Job::class);
    }
   
}