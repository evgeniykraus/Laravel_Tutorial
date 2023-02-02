### Задача №1

Реализуйте мягкое удаление юзеров.

1. Создал миграцию для добавления столбца deleted_at в таблицу users

        php artisan make:migration update_users_table

2. Добавил столбец deleted_at

         public function up()
         {
            Schema::table('users', function (Blueprint $table) {
            $table->softDeletes();
            });
         }
3. Запустил миграцию

         php artisan migrate

4. В модель User добавил трейт

         Illuminate\Database\Eloquent\SoftDeletes

5. Теперь при удалении заполняется поле deleted_at, а данные пользователя исключаются из запросов.

_Вот дамп удаленного пользователя, вызывал через User::withTrashed()->whereId(1)->first();_

         "id" => 1
         "name" => "name_1"
         "email" => "n30DnPKKhw@gmail.com"
         "age" => 22
         "salary" => 251
         "created_at" => "2023-02-02 13:48:08"
         "updated_at" => "2023-02-02 11:10:52"
         "city_id" => 5
         "deleted_at" => "2023-02-02 11:10:52"

### Задача №2

Реализуйте восстановление удаленных юзеров.

      User::withTrashed()->whereId(1)->restore()