<?php

class User extends Model {

    public function games() {
        return $this->hasMany(UserGame::class);
    }

    public function searches() {
        return $this->hasMany(Search::class);
    }
}

class UserGame extends Model {

    public function user() {
        return $this->belongsTo(User::class);
    }
}

class Search extends Model {

    public function user() {
        return $this->belongsTo(User::class);
    }
}
