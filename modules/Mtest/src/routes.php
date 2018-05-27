<?php

/**
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 *
 * @category   Routes
 * @package    MTEST
 * @author     Vinod Pawar <vpawar9091@gmail.com>
 * @name       routes.php
 * @version    GIT: <git_id>
 * @link       http://google.com
 * @filesource
 */
Route::group(['middleware' => ['web', 'auth'], 'namespace' => 'Modules\Mtest\Controllers'], function () {

    Route::get('mtest/getAccount/', [
        'uses'       => 'MtestController@viewAccountDetails'
    ]);


});
