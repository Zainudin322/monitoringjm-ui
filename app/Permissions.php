<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'application_id'
    ];

    /**
     * Application
     *
     * @return void
     */
    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
