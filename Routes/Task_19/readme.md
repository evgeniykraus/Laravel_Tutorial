## Задача №1

Дайте имя следующему маршруту:

    <?php
        Route::get('/user/profile', function () {
            return 'profile';
        });
    ?>

Ответ:

    <?php
        Route::get('/user/profile', function () {
            return 'profile';
        })->name('profile');
    ?>
