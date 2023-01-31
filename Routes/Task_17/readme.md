## Задача №1

Разрулите конфликт маршрутов:

    <?php
        Route::get('/user/{id}', function ($id) {
            return 'id';
        });

        Route::get('/user/all', function () {
            return 'all';
        });
    ?>

Ответ:

    <?php
        Route::get('/user/{id}', function ($id) {
            return 'id';
        })->whereNumber('id');
        
        Route::get('/user/all', function () {
        return 'all';
        });
    ?>

## Задача №2

Разрулите конфликт маршрутов:

    <?php
        Route::get('/user/{id?}', function ($id = null) {
            return 'id';
        });

        Route::get('/user/', function () {
            return 'user';
        });

        Route::get('/user/all', function () {
            return 'all';
        });
    ?>

Ответ:

    <?php
        Route::get('/user/{id}', function ($id) {
        return 'id';
        })->whereNumber('id');
        
        Route::get('/user/', function () {
        return 'user';
        });
        
        Route::get('/user/all', function () {
        return 'all';
        });
    ?>

## Задача №3

Разрулите конфликт маршрутов:

    <?php
        Route::get('/user/{name}/{id?}', function ($name, $id) {
            return 'name id';
        });

        Route::get('/user/all', function () {
            return 'all';
        });

        Route::get('/user/all/desc', function () {
            return 'all desc';
        });
    ?>

Ответ:

    <?php
        Route::get('/user/{name}/{id}', function ($name, $id) {
            return 'name id';
        })->whereAlpha('name')->whereNumber('id');
        
        Route::get('/user/all', function () {
            return 'all';
        });
        
        Route::get('/user/all/desc', function () {
            return 'all desc';
        });
    ?>

## Задача №4

Разрулите конфликт маршрутов:

    <?php
        Route::get('/user/{id}', function ($id) {
            return 'id';
        })->where('slug', '[a-z0-9_-]+');

        Route::get('/user/{id}', function ($id) {
            return 'id';
        })->where('id', '[0-9]+');
    ?>    

Ответ:

    <?php
        Route::get('/user/{id}', function ($id) {
            return 'id';
        })->where('id', '[0-9]+');
    
        Route::get('/user/{slug}', function ($slug) {
            return 'slug';
        })->where('slug', '[a-z0-9_-]+');
    ?>

