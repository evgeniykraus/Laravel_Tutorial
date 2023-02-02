### Задача №1

Измените какого-нибудь юзера в вашей базе данных.

    public function udate()
    {
        $user = User::query()->find(1);

        $user->name = 'User_Updated';
        $user->email = 'User_Updated@mail.ru';
        $user->age = 30;
        $user->salary = 300;
        $user->city_id = City::query()->inRandomOrder()->value('id');

        $user->save();

        dump('Готово!');
    }