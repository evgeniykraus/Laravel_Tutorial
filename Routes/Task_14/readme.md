### Задача №1

Сделайте маршрут вида /user/:id/:name, где вместо :id должно быть число, а вместо :name - строка, состоящая из маленьких
латинских букв количеством более 2-х.

    Route::get('/user/{id}/{name}', function ($id, $name) {
        dd("userId = $id userName = $name");
    })->where('id', '[0-9]+')->where('name', '[a-z]{3}');

### Задача №2

Сделайте маршрут вида /posts/:date, где вместо :date должна быть дата в формате год-месяц-день.

    Route::get('/posts/{date}', function ($date) {
        dd("Дата = $date");
    })->where('date', '^(?:[0-9]{2})?[0-9]{2}-[0-3]?[0-9]-[0-3]?[0-9]$');

* не самая правильная регулярка, знаю.

### Задача №3

Сделайте маршрут вида /:year/:month/:day, где вместо :year должен быть год, вместо :month - месяц, вместо :day - день.

    Route::get('/posts/{year}/{month}/{day}', function ($year, $month, $day) {
        dd("Дата = $year-$month-$day");
    })->where('year', '^(?:[0-9]{2})?[0-9]{2}$')->where('month', '^[0-3]?[0-9]$')->where('date', '^[0-3]?[0-9]$');

### Задача №4

Сделайте маршрут вида /users/:order, где вместо :order должно быть одно из значений: 'name', 'surname' или 'age'.

    Route::get('/users/{order}', function ($order) {
        dd("Значение order = $order");
    })->whereIn('order', ['name', 'surname', 'age']);