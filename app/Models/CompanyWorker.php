<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyWorker extends Model
{
    protected $fillable = ['company_id', 'user_id'];
}
