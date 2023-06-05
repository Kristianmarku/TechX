<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssueReply extends Model
{
    use HasFactory;

    protected $fillable = [
        'issue_id', 'support_id', 'message'
    ];

    public function issue()
    {
        return $this->belongsTo(Issue::class);
    }

    public function support()
    {
        return $this->belongsTo(User::class);
    }
}
