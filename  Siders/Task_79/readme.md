### Задача №1

Заполните таблицу с юзерами, сгенерировав емейлы выполнив конкатенацию.

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
            for ($i = 1; $i != 14; $i++)
                DB::table('users')->
                where('id', '=', $i)->
                update(['email' => strtolower(Str::random(rand(3, 10))) . '@' . strtolower(Str::random(5)) . '.com']);
        }
    }
