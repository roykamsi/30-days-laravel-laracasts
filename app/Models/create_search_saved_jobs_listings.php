<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class create_search_saved_jobs_listings extends Model
{
    use HasFactory;

    protected $fillable = ['job_id'] ;
}
