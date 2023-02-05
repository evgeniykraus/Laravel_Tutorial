### Задача №1

Сделайте следующие таблицы:

#### users

* id
* login
* password

#### profiles

* id
* name
* surname
* email
* user_id

Решение:

1. Создал файлы миграций

        php artisan make:migration create_users_table
        php artisan make:migration create_profiles_table

2. Добавил скрипты создания таблиц

        public function up()
        {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('login');
                $table->string('password');
            });
        }

       public function up()
       {
           Schema::create('profiles', function (Blueprint $table) {
               $table->id();
               $table->string('name');
               $table->string('surname');
               $table->string('email');
               $table->unsignedBigInteger('user_id');
               $table->foreign('user_id')->references('id')->on('users');
           });
       }

3. Сделал сидеры для таблиц

        for ($i = 1; $i < 11; $i++)
            DB::table('profiles')->insert([
                'name' => 'name_' . $i,
                'surname' => 'surname_' . $i,
                'email' => 'name_' . $i . '@mail.ru',
                'user_id' => $i,
            ]);
        }

         public function run()
         {
            for ($i = 1; $i < 11; $i++)
               DB::table('users')->insert([
                  'login' => 'login_' . $i,
                  'password' => Hash::make('12345'),
               ]);
         }

4. Сделал вайп БД

         php artisan db:wipe

5. Запустил миграции и сидеры

         php artisan migrate:refresh --seed

6. Создал модели Profile и User

### Задача №2

Свяжите эти таблицы отношением hasOne.

      <?php
      
      namespace App\Models;
      
      use Illuminate\Database\Eloquent\Model;
      
      class User extends Model
      {
          public function profile()
          {
              return $this->hasOne(Profile::class);
          }
      }
