<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    //public $timestamps = false;

    //TABLE
    public $table = 'employees';

    //FILLABLE
    protected $fillable = [
        'name',
        'contact_no',
        'salary_per_day',
        'amount_portfolio',
    ];

    //HIDDEN
    protected $hidden = [];

    //APPENDS
    protected $appends = [];

    //WITH
    protected $with = [];

    //CASTS
    protected $casts = [];

    //RELATIONSHIPS
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }

    //SCOPES
    //public function scopeExample($query)
    //{
    //    $query->where('columns_name', 'some_condition');
    //}

    //ATTRIBUTES
    //public function getExampleAttribute()
    //{
    //    return $data;
    //}

}
