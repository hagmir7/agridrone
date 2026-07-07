<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'full_name',
        'subject',
        'phone',
        'message',
        'status',
    ];

    public const STATUS_TO_PROCESS = 'to_process';
    public const STATUS_IN_PROGRESS = 'in_progress';
    public const STATUS_DONE = 'done';

    public function scopeToProcess($query)
    {
        return $query->where('status', self::STATUS_TO_PROCESS);
    }
}
