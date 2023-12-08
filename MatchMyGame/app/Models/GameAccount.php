<?php

use Illuminate\Database\Eloquent\Model;

class GameAccount extends Model
{
    protected $fillable = [
        'user_id', 'game_type', 'game_account_id',
    ];

}
