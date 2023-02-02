### Задача №1

Получите коллекцию имен всех юзеров.

    public function show()
    {
        $users_names = DB::table('users')->pluck('name');

        return view('user.show', ['users_names' => $users_names]);
    }

### Задача №2

Передайте в представление коллекцию юзеров, полученную в предыдущей задаче. Выведите эти данные в виде списка ul.

    <x-layout>
        <ul>
            @foreach($users_names as $name)
                <li>
                    {{$name}}
                </li>
            @endforeach
        </ul>
    </x-layout>