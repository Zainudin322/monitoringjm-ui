<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'group_id', 'name', 'bpo', 'year', 'url', 'server', 'image'
    ];

    /**
     * Application
     *
     * @return void
     */
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
