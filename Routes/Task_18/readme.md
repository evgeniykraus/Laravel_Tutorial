## Задача №1

Сгрупируйте следующие маршруты:

    <?php
        Route::get('/admin/users', function ($id) {
            return 'all';
        });
        Route::get('/admin/user/{id}', function ($id) {
            return $id;
        });
    ?>

Ответ:

    <?php
        Route::prefix('/admin')->group(function () {
            Route::get('/users', function () {
                return 'all';
            });
            Route::get('/user/{id}', function ($id) {
                return $id;
            });
        });
    ?>