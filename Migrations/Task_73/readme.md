### Задача №1

Выполните миграцию, а потом откатите ее назад.
    
    php artisan migrate:rollback

### Задача №2

Откатите миграции на 3 шага назад.

    php artisan migrate:rollback --step=3

### Задача №3

Откатите все миграции.

    php artisan migrate:reset

### Задача №4

Перезапустите все миграции.

    php artisan migrate:refresh