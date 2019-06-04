<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

\Illuminate\Support\Facades\Auth::routes();

Route::get('/', [
    'uses' => 'front\HomeController@getIndex',
    'as' => 'front.index'
]);

Route::get('/contacts', [
    'uses' => 'front\ContactController@getContacts',
    'as' => 'front.contacts'
]);

Route::post('/contacts', [
    'uses' => 'front\ContactController@postContacts',
    'as' => 'front.contacts'
]);

Route::get('/yourtour', [
    'uses' => 'front\HomeController@getYourTour',
    'as' => 'front.yourtour'
]);

Route::prefix('/about')->group(function (){


    Route::get('/aboutus', [
        'uses' => 'front\AboutController@getAboutUs',
        'as' => 'front.about.aboutus'
    ]);

    Route::get('/ourmission', [
        'uses' => 'front\AboutController@getOurMission',
        'as' => 'front.about.ourmission'
    ]);

    Route::get('/terms', [
        'uses' => 'front\AboutController@Terms',
        'as' => 'front.about.terms'
    ]);

    Route::get('/review', [
        'uses' => 'front\AboutController@Review',
        'as' => 'front.about.review'
    ]);

    Route::get('/faq', [
        'uses' => 'front\AboutController@FAQ',
        'as' => 'front.about.faq'
    ]);


});

Route::prefix('/user')->group(function(){


    Route::group(['middleware' => 'useraccess'], function(){

        Route::get('/logout', [
            'uses' => 'front\UserController@getLogout',
            'as' => 'front.user.logout'
        ]);

        Route::get('/profile', [
            'uses' => 'front\UserController@getProfile',
            'as' => 'front.user.profile'
        ]);

        Route::post('/profile', [
            'uses' => 'front\UserController@postProfile',
            'as' => 'front.user.profile'
        ]);

        Route::get('/tours', [
            'uses' => 'front\TourController@getTours',
            'as' => 'front.user.tours'
        ]);

        Route::get('/newtour', [
            'uses' => 'front\TourController@getNewTour',
            'as' => 'front.user.newtour'
        ]);

        Route::post('/newtour', [
            'uses' => 'front\TourController@postNewTour',
            'as' => 'front.user.newtour'
        ]);

        Route::get('/tourdetail/{id}', [
            'uses' => 'front\TourController@getTourDetail',
            'as' => 'front.user.tourdetail'
        ]);

        Route::get('/findyourtour', [
            'uses' => 'front\TourController@getFindYourTour',
            'as' => 'front.user.findyourtour'
        ]);

    });


    Route::get('/signup', [
        'uses' => 'front\UserController@getSignup',
        'as' => 'front.user.signup'
    ]);

    Route::post('/signup', [
        'uses' => 'front\UserController@postSignup',
        'as' => 'front.user.signup'
    ]);

    Route::get('/login', [
        'uses' => 'front\UserController@getLogin',
        'as' => 'front.user.login'
    ]);

    Route::post('/login', [
        'uses' => 'front\UserController@postLogin',
        'as' => 'front.user.login'
    ]);

    Route::get('/forgotpassword', [
        'uses' => 'front\UserController@getForgotPassword',
        'as' => 'front.user.forgotpassword'
    ]);

    Route::post('/forgotpassword', [
        'uses' => 'front\UserController@postForgotPassword',
        'as' => 'front.user.forgotpassword'
    ]);

    Route::post('/activation', [
        'uses' => 'UserController@postActivation',
        'as' => 'user.activation'
    ]);


    Route::group(['middleware' => 'guest'], function(){



    });


});

Route::prefix('/fs/bj/admin')->group(function(){


    Route::group(['middleware' => 'adminguest'], function(){



    });

    Route::get('/login', [
        'uses' => 'admin\LoginController@getLogin',
        'as' => 'admin.login'
    ]);

    Route::post('/login', [
        'uses' => 'admin\LoginController@postLogin',
        'as' => 'admin.login'
    ]);


    Route::group(['middleware' => 'admin'], function(){

        Route::get('/home', [
            'uses' => 'admin\HomeController@getHome',
            'as' => 'admin.home'
        ]);

        Route::get('/logout', [
            'uses' => 'admin\LoginController@getLogout',
            'as' => 'admin.logout'
        ]);

        Route::get('/mail/message', [
            'uses' => 'admin\MailController@getMessage',
            'as' => 'admin.mail.message'
        ]);

        Route::get('/mail/inbox', [
            'uses' => 'admin\MailController@getInbox',
            'as' => 'admin.mail.inbox'
        ]);

        Route::get('/mail/sent', [
            'uses' => 'admin\MailController@getSent',
            'as' => 'admin.mail.sent'
        ]);

        Route::get('/mail/compose', [
            'uses' => 'admin\MailController@getCompose',
            'as' => 'admin.mail.compose'
        ]);

        Route::post('/mail/compose', [
            'uses' => 'admin\MailController@postCompose',
            'as' => 'admin.mail.compose'
        ]);

        Route::get('/user/activeusers', [
            'uses' => 'admin\UserController@getActiveUsers',
            'as' => 'admin.user.activeusers'
        ]);

        Route::get('/user/newusers', [
            'uses' => 'admin\UserController@getNewUsers',
            'as' => 'admin.user.newusers'
        ]);

        Route::get('/user/blockedusers', [
            'uses' => 'admin\UserController@getBlockedUsers',
            'as' => 'admin.user.blockedusers'
        ]);

        Route::get('/user/userprofile/{id}', [
            'uses' => 'admin\UserController@getUserProfile',
            'as' => 'admin.user.userprofile'
        ]);

        Route::post('/user/userprofile/{id}', [
            'uses' => 'admin\UserController@postActivateUser',
            'as' => 'admin.user.userprofile'
        ]);

        Route::get('/settings/activities', [
            'uses' => 'admin\SettingsController@getActivities',
            'as' => 'admin.settings.activities'
        ]);

        Route::post('/settings/activities', [
            'uses' => 'admin\SettingsController@postActivities',
            'as' => 'admin.settings.activities'
        ]);

    });


});
