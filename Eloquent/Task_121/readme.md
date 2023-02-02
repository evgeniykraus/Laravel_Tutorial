### Задача №1

Удалите из таблицы с юзерами всех юзеров с возрастом больше 30 лет.

    public function delete()
    {
        User::query()->where('age', '>', 30)->delete();

        dump('Готово!');
    }