### Задача №1

Увеличьте на 1 возраст заданному юзеру.

    public function incrementAge()
    {
        DB::table('users')->where('id', 1)
            ->increment('age');

        dd('Готово!');
    }

### Задача №2

Уменьшите на 1 возраст заданному юзеру.

    public function decrementAge()
    {
        DB::table('users')->where('id', 1)
            ->decrement('age');

        dd('Готово!');
    }

### Задача №3

Всем юзерам с возрастом 30 увеличьте зарплату на 100.

    public function incrementSalary()
    {
        DB::table('users')->where('age', 30)
            ->increment('salary', 100);

        dd('Готово!');
    }