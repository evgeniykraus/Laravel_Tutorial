### Задача №1

Сделайте маршрут вида /user/:id, где вместо :id должно быть число.

    Route::get('/user/{id}', function ($id) {
    dd("userId = $id");
    })->whereNumber('id');

### Задача №2

Сделайте маршрут вида /city/:name, где вместо :name должны быть буквы.

    Route::get('/city/{name}', function ($name) {
    dd("Параметр страницы city = $name");
    })->whereAlpha('name');