### Задача №1

Вставьте нового юзера в таблицу с юзерами.

    public function insert()
    {
        DB::table('users')->insert([
            'name' => 'User_new',
            'email' => 'User_new@mail.ru',
            'age' => '30',
            'salary' => '200',
        ]);
    }

### Задача №2

Вставьте нового юзера в таблицу с юзерами. Выведите на экран id вставленного юзера.

    public function insert()
    {
        $id = DB::table('users')->insertGetId([
            'name' => 'User_new_1',
            'email' => 'User_new_1@mail.ru',
            'age' => '40',
            'salary' => '300',
        ]);

        dd($id);
    }

### Задача №3

Вставьте трех новых юзеров в таблицу с юзерами.

    public function insert()
    {
        for ($i = 2; $i < 5; $i++) {
            DB::table('users')->insert([
                'name' => 'User_new_' . $i,
                'email' => 'User_new_' . $i . '@mail.ru',
                'age' => rand(10, 60),
                'salary' => rand(100, 1000),
            ]);
        }
        dd('Готово!');
    }