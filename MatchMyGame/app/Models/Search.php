<?php

class Search extends Model {
    // ...

    public function user() {
        return $this->belongsTo(User::class);
    }
}