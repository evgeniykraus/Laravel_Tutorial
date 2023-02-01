### Задача №1

В папке с миграциями изначально уже есть некоторые миграции. Нам они пока не нужны. Уберите их из этой папки.

### Задача №2

С помощью команды artisan сделайте миграцию, создающую таблицу users. Изучите код сгенерированного файла.

- php artisan make:migration create_users_table

- создался класс:

        <?php
        
        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;
        
        return new class extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create('users', function (Blueprint $table) {
                    $table->id();
                    $table->timestamps();
                });
            }
        
            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists('users');
            }
        };
