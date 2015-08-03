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
    return view('welcome');
});

Route::get('test', function() {
    return view('test.index');
});

Route::get('contact', [
    'as' => 'contact_create',
    'uses' => 'AboutController@create'
]);

Route::post('contact', [
    'as' => 'contact_store',
    'uses' => 'AboutController@store'
]);



use App\Driver;
use App\Schedule;
use App\District;
use App\User2;
use App\Role;

Route::get('attach', function() {
//    $drv = new Driver();
//    $drv->id = 'DRV02';
//    $drv->drvName = 'FTY2';
//    $drv->drvGender = 'M';
//    $drv->save();
//    $s = new Schedule();
//    $s->id = 'JOB01';
//    $s->jobDate = '01-01-2015';
//    $s->district()->associate(District::find('DST01'));
//    Driver::find('DRV02')->schedules()->save($s);
    //$s->save();

//    $u = new User2();
//    $u->id = 'USR01';
//    $u->name = 'User 01';
//    $u->save();
//
//    $r = new Role();
//    $r->id = 'ROL01';
//    $r->name = 'Role 01';
//    $r->save();

//    $r = Role::find('ROL01');
//    $r->users()->attach('USR01');

//    $u = User2::find('USR01');
//    $r = Role::find('ROL01');
//    $u->roles()->attach($r);
    dd(User2::lists('name', 'id'));
    return 'saved';
});