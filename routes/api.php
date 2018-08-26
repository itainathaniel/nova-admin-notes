<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Itainathaniel\AdminNotes\AdminNotes;

Route::get('/notes', 'Itainathaniel\AdminNotes\Http\Controllers\NotesController@index');
Route::post('/store', 'Itainathaniel\AdminNotes\Http\Controllers\NotesController@store');
