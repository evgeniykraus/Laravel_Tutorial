### Задача №1

Заполните таблицу с юзерами 10-ю записями со случайными строками.

    <?php
    
    namespace Database\Seeders;
    
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Str;
    
    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run()
        {
            for ($i = 0; $i < 10; $i++) {
                DB::table('users')->insert([
                    'name' => Str::random(10),
                    'surname' => Str::random(10),
                    'age' => rand(10, 65),
                ]);
            }
        }
    }
