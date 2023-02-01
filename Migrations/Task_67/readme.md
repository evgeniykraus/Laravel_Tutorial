### Задача №1

В таблице с юзерами переименуйте поле name в поле first_name, а поле surname в second_name.

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
            //Сначала снова создал столбцы
            Schema::table('users', function (Blueprint $table) {
                $table->string('name');
                $table->string('surname');
            });
    
            //Затем переименовал их
            Schema::table('users', function (Blueprint $table) {
                $table->renameColumn('name', 'first_name');
                $table->renameColumn('surname', 'second_name');
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

Так выглядит SQL скрипт создания таблицы users:

    create table test.users
    (
    id          bigint unsigned auto_increment
    primary key,
    birth_date  date         not null,
    patronymic  varchar(100) not null,
    first_name  varchar(255) not null,
    second_name varchar(255) not null
    )
    collate = utf8mb4_unicode_ci;

