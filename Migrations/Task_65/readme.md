### Задача №1

В таблице с юзерами измените размер поля name.

Создание миграции:

    php artisan make:migration change_users_table

Файл миграции:

    <?php
    
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    
    return new class extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::table('users', function (Blueprint $table) {
                $table->string('name', 150)->change();
            });
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            //
        }
    };

Запуск миграции:

    php artisan migrate

Теперь SQL скрипт создания таблицы выглядит так:

    create table test.users
    (
    id         bigint unsigned auto_increment
    primary key,
    name       varchar(150)                    not null,
    surname    varchar(100)                    not null,
    birth_date date                            not null,
    city       varchar(200) default 'Кемерово' not null,
    patronymic varchar(100)                    not null
    )
    collate = utf8mb4_unicode_ci;

