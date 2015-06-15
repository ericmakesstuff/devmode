<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('status', [
        'level' => \App\StatusLog::orderBy('created_at', SORT_DESC)->firstOrFail()->level
    ]);
});

Route::get('/set', function () {
    return view('set');
});

Route::get('/set/{level}', function ($level) {
    if (!in_array($level, ['severe', 'high', 'elevated', 'guarded', 'low'])) {
        return false;
    }

    if ($log = \App\StatusLog::create(compact('level'))) {
        event(new \App\Events\StatusLevelUpdated($log));
    }

    return $log;
});
