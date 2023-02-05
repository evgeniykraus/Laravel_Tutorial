### Задача №1

Сделайте следующие таблицы:

#### cities

* id
* name
* country_id

#### countries

* id
* name

Создал таблицы:

    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
    }

    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->on('countries')->references('id');
        });
    }

Нагуглил, что такое фабрики и сделал так:

    php artisan make:factory CityFactory
    php artisan make:factory CountryFactory

Потом так:

    class CityFactory extends Factory
    {
        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition(): array
        {
            return [
                'name' => fake()->city(),
                'country_id' => Country::query()->inRandomOrder()->first()->id,
            ];
        }
    }


    class CountryFactory extends Factory
    {
        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition(): array
        {
            return [
                'name' => fake()->city(),
            ];
        }
    }

Так как в таблицах нет столбцов с датой создания и обновления, в модели добавил следующее:

    public $timestamps = false;

Изменил сидер и вызвал его:

    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run()
        {
            Country::factory()->count(5)->create();
            City::factory()->count(20)->create();
        }
    }

### Задача №2

Свяжите таблицу countries с таблицей cities отношением hasMany.

    <?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    
    class Country extends Model
    {
        use HasFactory;
    
        public $timestamps = false;
    
        public function city()
        {
            return $this->hasMany(City::class);
        }
    }