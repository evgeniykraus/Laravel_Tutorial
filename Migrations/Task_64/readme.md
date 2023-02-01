### Задача №1

Установите библиотеку Doctrine DBAL.

    composer require doctrine/dbal

### Задача №2

Внесите изменение в конфигурацию, чтобы можно было пользоваться методом timestamp.

- Добавил в config/database.php

        use Illuminate\Database\DBAL\TimestampType;
    
        'dbal' => [
            'types' => [
                'timestamp' => TimestampType::class,
            ],
        ],