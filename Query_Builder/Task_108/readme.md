### Задача №1

Измените юзера с id, равным 5.

    public function update()
    {
        DB::table('users')->where('id', 5)
            ->update([
                'age' => 30,
                'salary' => 1000,
            ]);

        dd('Готово!');
    }

### Задача №2

Всем юзерам с возрастом 30 установите зарплату 500.

    public function update()
    {
        DB::table('users')->where('age', 30)
            ->update([
                'salary' => 500,
            ]);

        dd('Готово!');
    }