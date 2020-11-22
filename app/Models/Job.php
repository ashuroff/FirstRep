<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

class Job extends Model
{
    protected $table = 'jobs';
    protected $fillable = [
        'job',
        'diploma',
        'age',
        'contact_id'
    ];
     public function job()
    {
    return $this->belongsTo(Contact::class, 'contact_id', 'id');
    }

    public function contact()
    {  
        return $this->belongsToMany(Contact::class);
    }
    
}