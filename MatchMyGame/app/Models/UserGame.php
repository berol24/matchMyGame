<?php

class UserGame extends Model {

    public function user() {
        return $this->belongsTo(User::class);
    }
}