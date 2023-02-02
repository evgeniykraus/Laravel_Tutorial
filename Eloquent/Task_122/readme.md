### Задача №1

Удалите юзера с id, равным 3.

    public function destroy()
    {
        User::destroy(3);

        dump('Готово!');
    }

### Задача №1

Удалите юзеров с id, равными 4, 5, 6.

    public function destroy()
    {
        User::destroy(4, 5, 6);

        dump('Готово!');
    }


