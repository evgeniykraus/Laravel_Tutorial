### Задача №1

Выполните вставку 10 юзеров, захешировав их пароли.

    <?php
    
    namespace Database\Seeders;
    
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Hash;
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
            for ($i = 0; $i < 10; $i++)
                DB::table('users')->insert([
                    'name' => 'name_1' . $i,
                    'surname' => 'surname_1' . $i,
                    'age' => rand(10, 65),
                    'email' => Str::random(10) . '@gmail.com',
                    'password' => Hash::make('12345'),
                ]);
        }
    }
