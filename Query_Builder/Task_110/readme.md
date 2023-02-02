### Задача №1

Удалите юзера с id, равным 5.

    public function deleteUser()
    {
        DB::table('users')->where('id', 5)
            ->delete();

        dd('Готово!');
    }

### Задача №2

Удалите юзеров с возрастом 30.

    public function deleteUsers()
    {
        DB::table('users')->where('age', 30)
            ->delete();

        dd('Готово!');
    }

### Задача №3

Удалите всех юзеров.

    public function deleteUsers()
    {
        DB::table('users')->delete();

        dd('Готово!');
    }