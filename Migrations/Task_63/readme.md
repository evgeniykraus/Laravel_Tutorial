### Задача №1

Сделайте миграцию, добавляющую новые колонки в таблицу с юзерами. Примените ее. Откройте PMA и убедитесь, что ваша
миграция применилась.

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
                $table->string('city', 200)->default('Кемерово');
                $table->string('patronymic', 100);
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
