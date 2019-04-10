<?php

Route::group([
  'namespace' => 'Frontend',
  'as' => 'frontend.'],
  function () {
     require base_path('routes/frontend/frontend.php');
  });


// Bakcend

Auth::routes();

// Admin Dashborad
Route::group([
  'namespace' => 'Backend\Admin',
  'prefix' => 'admin',
  'as' => 'admin.',
  'middleware' => 'auth'],
  function () {
     require base_path('routes/backend/admin.php');
  });

