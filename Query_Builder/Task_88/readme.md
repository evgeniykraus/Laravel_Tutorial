### Задача №1

Дан следующий запрос:

    <?php
        DB::table('posts')->where('id', '!=', 3)->get();
    ?>

Посмотрите различными способами, какой SQL запрос выполняется на самом деле.

1. Вкладка Queries в дебагбаере

        select * from `posts` where `id` != 3

2. Через лог запросов

         array:1 [▼ // app\Http\Controllers\PostController.php:13
         0 => array:3 [▼
         "query" => "select * from `posts` where `id` != ?"
         "bindings" => array:1 [▼
         0 => 3
         ]
         "time" => 12.75
         ]
         ]

3. Используя метод toSql

         "select * from `posts` where `id` > ?" // app\Http\Controllers\PostController.php:12

4. Можно посмотреть запрос через метод dd или dump:
### Задача №2

Определите, за какое время был выполнен приведенный запрос.

* время запроса составляет от 3 до 30 мс