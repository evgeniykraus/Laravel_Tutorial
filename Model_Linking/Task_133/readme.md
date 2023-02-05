### Задача №1

Сделайте следующие таблицы:

#### cities

* id
* name

#### positions

* id
* name

#### users

* id
* name
* city_id
* position_id

1. Изменил скрипты миграций

        public function up()
        {
            Schema::create('cities', function (Blueprint $table) {
                $table->id();
                $table->string('name');
            });
        }
    
        public function up()
        {
            Schema::create('positions', function (Blueprint $table) {
                $table->id();
                $table->string('name');
            });
        }
    
        public function up()
        {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->unsignedBigInteger('city_id');
                $table->unsignedBigInteger('position_id');
                $table->foreign('city_id')->on('cities')->references('id');
                $table->foreign('position_id')->on('positions')->references('id');
            });
        }

2. Создал фабрики

        public function definition(): array
        {
            return [
                'name' => fake()->city(),
            ];
        }

        public function definition()
        {
            return [
                'name' => fake()->jobTitle,
            ];
        }

        public function definition(): array
        {
            return [
                'name' => fake()->name,
                'city_id' => City::query()->inRandomOrder()->first()->id,
                'position_id' => Position::query()->inRandomOrder()->first()->id,
            ];
        }


3. Добавил фабрики в сидер

         class DatabaseSeeder extends Seeder
         {
            public function run()
            {
               City::factory()->count(5)->create();
               Position::factory()->count(5)->create();
               User::factory()->count(20)->create();
            }
         }

### Задача №2

Сделайте модель с юзерами, модель с городами и модель с должностями.

      php artisan make:model City
      php artisan make:model Position
      php artisan make:model User

### Задача №3

Свяжите юзера с его городом и с его должностью отношением belongsTo.

      <?php
      
      namespace App\Models;
      
      use Illuminate\Database\Eloquent\Factories\HasFactory;
      use Illuminate\Database\Eloquent\Model;
      
      class User extends Model
      {
          use HasFactory;
      
          public $timestamps = false;
      
          public function city()
          {
              return $this->belongsTo(City::class);
          }
          
          public function position()
          {
              return $this->belongsTo(Position::class);
          }
      }

### Задача №4

Получите юзеров вместе с их городом и должностью.

      <?php
      
      namespace App\Http\Controllers;
      
      use App\Models\User;
      
      class UserController extends Controller
      {
          public function show()
          {
              $users = User::all();
      
              return view('user.show', [
                  'users' => $users,
              ]);
          }
      }

Вьюха:

      <x-layout>
          <table border="1">
              <tr>
                  <td><b>id</b></td>
                  <td><b>user_name</b></td>
                  <td><b>position</b></td>
                  <td><b>city</b></td>
              </tr>
              @foreach($users as $user)
                  <tr>
                      <td>{{ $user->id }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->position->name }}</td>
                      <td>{{ $user->city->name }}</td>
                  </tr>
              @endforeach
          </table>
      </x-layout>