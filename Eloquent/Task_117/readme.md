### Задача №1

Получите юзера с возрастом 30. Передайте его в представление. Выведите данные этого юзера в отдельных тегах.

_не хотел вьюху делать, поэтому так вывел_

    public function show()
    {
        $user = User::query()->where('age', 30)->first();

        dump($user->id);
        dump($user->name);
        dump($user->email);
        dump($user->age);
        dump($user->salary);

}