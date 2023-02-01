### Задача №1

Добавьте в таблице с юзерами комментарий к полю email.

### Задача №2

Сделайте так, чтобы в таблице с юзерами поле salary по умолчанию принимало значение 0.

### Задача №3

Разрешите в таблице с юзерами полю age принимать значение null.

### Задача №4

Сделайте в таблице с юзерами поле age беззнаковым.

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
                $table->string('email')->comment('Электронная почта пользователя');
                $table->integer('salary')->default(0);
                $table->integer('age')->nullable()->unsigned();
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
    birth_date  date          not null,
    patronymic  varchar(100)  not null,
    first_name  varchar(255)  not null,
    second_name varchar(255)  not null,
    email       varchar(255)  not null comment 'Электронная почта пользователя',
    salary      int default 0 not null,
    age         int unsigned  null
    )
    collate = utf8mb4_unicode_ci;