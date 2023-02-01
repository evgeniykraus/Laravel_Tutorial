### Задача №1

Удалите из таблицы с юзерами поле city.

### Задача №2

Удалите из таблицы с юзерами поля name и surname.

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
              $table->dropColumn('city');
              $table->dropColumn(['name', 'surname']);
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
