<?php
class Phonebook extends Eloquent {

    protected $table = 'phonebook';
    protected $fillable = array('name', 'address', 'email','no_telp','gender','twitter','facebook');
    protected $guarded = array('id');
}
