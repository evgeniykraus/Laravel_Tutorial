### Задача №1

Сделайте таблицу users и таблицу cities с городами, в которых живут юзеры.

1. Сделал новую миграцию для таблицы с городами:

        php artisan make:migration create_cities_table    

2. В таблицу городов добавил столбец с именем города

       public function up()
       {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
       }

3. Изменил миграцию для таблицы users

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
               $table->unsignedBigInteger('city_id');
               $table->foreign('city_id')->references('id')->on('cities');
           });
       }

4. Сделал сидер для городов

         <?php
         
         namespace Database\Seeders;
         
         use Illuminate\Database\Seeder;
         use Illuminate\Support\Facades\DB;
         
         class CitySeeder extends Seeder
         {
             public function run()
             {
                 for ($i = 1; $i < 11; $i++)
                     DB::table('cities')->insert([
                         'name' => 'City_' . $i,
                     ]);
             }
         }

5. Изменил сидер для юзеров

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
                         'city_id' => DB::table('cities')->inRandomOrder()->value('id'),
                     ]);
             }
         }

6. Сделал вайп

           php artisan db:wipe

7. Запустил все миграции и сидеры

         php artisan migrate --seed

### Задача №1

С помощью построителя запросов получите список всех юзеров вместе с их городами.

    public function show()
    {
        $users = DB::table('users')
            ->select('users.*', 'cities.name as city')
            ->leftJoin('cities', 'cities.id', '=', 'users.city_id')
            ->get();

        return view('user.show', ['users' => $users]);
    }

Для вывода изменил вьюху:
   
      <x-layout>
          <table border="1">
              <tr>
                  <td><b>id</b></td>
                  <td><b>name</b></td>
                  <td><b>email</b></td>
                  <td><b>age</b></td>
                  <td><b>salary</b></td>
                  <td><b>city</b></td>
                  <td><b>created_at</b></td>
                  <td><b>updated_at</b></td>
              </tr>
              @foreach ($users as $user)
                  <tr>
                      <td>{{ $user->id }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->age }}</td>
                      <td>{{ $user->salary }}</td>
                      <td>{{ $user->city }}</td>
                      <td>{{ $user->created_at }}</td>
                      <td>{{ $user->updated_at }}</td>
                  </tr>
              @endforeach
          </table>
      </x-layout>
