### Задача №1

Добавьте нового юзера в вашу базу данных.

    public function add()
    {
        $user = new User;

        $user->name = 'User_New';
        $user->email = 'User_New@mail.ru';
        $user->age = 30;
        $user->salary = 300;
        $user->city_id = City::query()->inRandomOrder()->value('id');

        $user->save();

        dump('Готово!');
    }