### Задача №1

Переименуйте таблицу с юзерами.

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
            //Сначала пришлось создать
            Schema::create('users', function (Blueprint $table) {
                $table->id()->autoIncrement();
                $table->string('name', 100);
                $table->string('surname', 100);
                $table->date('birth_date');
            });
            
            //Тут она переименовалась
            Schema::rename('users', 'clients');
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
