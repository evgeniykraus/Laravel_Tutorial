#### posts

* id
* title(varchar)
* slug(varchar)
* likes(integer)
* created_at(datetime)
* updated_at(datetime)

#### users

* id
* name(varchar)
* email(varchar)
* age(integer)
* salary(integer)
* created_at(datetime)
* updated_at(datetime)

### Задача №1

Сделайте миграции и сидеры для указанных таблиц.

1. Создал файлы миграций:

        php artisan make:migration create_posts_table
        php artisan make:migration create_users_table

2. Создал таблицу posts

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
                 Schema::create('posts', function (Blueprint $table) {
                     $table->id();
                     $table->string('title', 200);
                     $table->string('slug', 100);
                     $table->integer('likes');
                     $table->timestamp('created_at')->useCurrent();
                     $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
                 });
             }
         
             /**
              * Reverse the migrations.
              *
              * @return void
              */
             public function down()
             {
                 Schema::dropIfExists('posts');
             }
         };


3. Создал таблицу users

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
                 Schema::create('users', function (Blueprint $table) {
                     $table->id();
                     $table->string('name', 100);
                     $table->string('email', 255);
                     $table->integer('age');
                     $table->integer('salary');
                     $table->timestamp('created_at')->useCurrent();
                     $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
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


4. Создал сидеры для таблиц

    * PostsSeeder

          <?php
          
          namespace Database\Seeders;
          
          use Illuminate\Database\Seeder;
          use Illuminate\Support\Facades\DB;
          
          class PostsSeeder extends Seeder
          {
              public function run()
              {
                  for ($i = 1; $i < 11; $i++)
                      DB::table('posts')->insert([
                          'title' => 'title_' . $i,
                          'slug' => 't_' . $i,
                          'likes' => rand(10, 1000),
                      ]);
              }
          }

    * UsersSeeder

          <?php
          
          namespace Database\Seeders;
          
          use Illuminate\Database\Seeder;
          use Illuminate\Support\Facades\DB;
          use Illuminate\Support\Str;
          
          class UsersSeeder extends Seeder
          {
              public function run()
              {
                  for ($i = 1; $i < 11; $i++)
                      DB::table('users')->insert([
                          'name' => 'name_' . $i,
                          'email' => Str::random(10) . '@gmail.com',
                          'age' => rand(10, 65),
                          'salary' => rand(100, 1000),
                      ]);
              }
          }

5. Вызвал сидеры в классе DatabaseSeeder

         <?php
         
         namespace Database\Seeders;
         
         use Illuminate\Database\Seeder;
         
         class DatabaseSeeder extends Seeder
         {
             /**
              * Seed the application's database.
              *
              * @return void
              */
             public function run()
             {
                 $this->call([
                     PostsSeeder::class,
                     UsersSeeder::class,
                 ]);
             }
         }

6. Выполнил все миграции и сидеры.

         php artisan migrate:fresh --seed