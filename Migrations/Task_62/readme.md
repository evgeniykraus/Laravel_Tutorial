### Задача №1

Сделайте миграцию, создающую таблицу со статьями. Пусть у этой таблицы будут поля с заголовком статьи, ее текстом, датой создания.

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
        public function up():void
        {
            Schema::create('posts', function (Blueprint $table) {
                $table->id()->autoIncrement();
                $table->string('title');
                $table->text('text');
                $table->date('crated_at');
            });
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down():void
        {
            Schema::dropIfExists('posts');
        }
    };

### Задача №2

Сделайте миграцию, создающую таблицу с юзерами. Пусть у этой таблицы будут поля с именем, фамилией, датой рождения, датой создания юзера.

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
        public function up():void
        {
            Schema::create('users', function (Blueprint $table) {
                $table->id()->autoIncrement();
                $table->string('name', 100);
                $table->string('surname', 100);
                $table->date('birth_date');
            });
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down():void
        {
            Schema::dropIfExists('users');
        }
    };
