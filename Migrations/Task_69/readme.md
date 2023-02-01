### Задача №1

В таблице с юзерами переместите поле name на первое место.

### Задача №2

Добавьте к таблице с юзерами новое поле sex поле поля id.

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
                $table->renameColumn('first_name', 'name');
            });
    
            Schema::table('users', function (Blueprint $table) {
                $table->string('name')->first()->change();
                $table->integer('sex')->after('id');
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
