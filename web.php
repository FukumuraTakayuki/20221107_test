<?php

use Illuminate\Support\Facades\Route;

Route::get('/building/{room?}/{id}', function ($room, $id) {
  return $room . '部屋番号は' . 3 . 'です';
});