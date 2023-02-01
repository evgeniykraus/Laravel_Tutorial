### Задача №1

Добавьте данные в таблицу с юзерами.

    <?php
    
    namespace Database\Seeders;
    
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;
    
    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run()
        {
            DB::table('users')->insert([
                [
                    'name' => 'name_1',
                    'surname' => 'surname_1',
                    'age' => 12,
                ],
                [
                    'name' => 'name_2',
                    'surname' => 'surname_2',
                    'age' => 22,
                ],
                [
                    'name' => 'name_3',
                    'surname' => 'surname_3',
                    'age' => 32,
                ],
            ]);
        }
    }

Команда для добавления:

    php artisan db:seed
