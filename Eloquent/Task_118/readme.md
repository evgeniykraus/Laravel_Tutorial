### Задача №1

Получите юзера с id, равным 3. Передайте его в представление. Выведите данные этого юзера в отдельных тегах.

    public function show()
    {
        $user = User::query()->find(1);

        dump($user->id);
        dump($user->name);
        dump($user->email);
        dump($user->age);
        dump($user->salary);
    }

### Задача №2

Получите юзеров с id, равными 3, 4 и 5.

    public function show()
    {
        $users = User::query()->find([3, 4, 5]);

        return view('user.show', ['users' => $users]);
    }