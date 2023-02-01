### Задача №1

Сделайте миграцию, которая добавляет в таблицу новое поле. Пропишите откат этой миграции.

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
            Schema::rename('clients', 'users');
    
            Schema::table('users', function (Blueprint $table) {
                $table->string('test');
            });
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('test');
            });
    
            Schema::rename('users', 'clients');
        }
    };

### Задача №2

Сделайте миграцию, которая удаляет поле из таблицы. Пропишите откат этой миграции.

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
                $table->dropColumn('test');
            });
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::table('users', function (Blueprint $table) {
                $table->string('test');
            });
        }
    };

### Задача №3

Сделайте миграцию, которая удаляет несколько полей из таблицы. Пропишите откат этой миграции.

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
                $table->dropColumn(['birth_date', 'surname']);
            });
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::table('users', function (Blueprint $table) {
                $table->string('surname');
                $table->date('birth_date');
            });
        }
    };

### Задача №4

Сделайте миграцию, которая поменяет порядок полей в таблице. Пропишите откат этой миграции.

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
                $table->string('name')->first()->change();
            });
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::table('users', function (Blueprint $table) {
                $table->string('name')->after('id')->change();
            });
        }
    };

### Задача №5

Сделайте миграцию, которая переименовывает таблицу. Пропишите откат этой миграции.

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
            Schema::rename('users', 'clients');
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::rename('clients', 'users');
        }
    };
