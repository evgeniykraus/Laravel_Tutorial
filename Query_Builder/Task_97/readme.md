### Задача №1

Получите юзеров, возраст которых находится в промежутке от 30 до 40.

    public function show()
    {
        $users = DB::table('users')
            ->whereBetween('age', [30, 40])->get();

        return view('user.show', ['users' => $users]);
    }

### Задача №2

Получите юзеров, возраст которых находится НЕ в промежутке от 30 до 40.

    public function show()
    {
        $users = DB::table('users')
            ->whereNotBetween('age', [30, 40])->get();

        return view('user.show', ['users' => $users]);
    }

Вьюха:

    <x-layout>
        <table border="1">
            <tr>
                <td><b>id</b></td>
                <td><b>name</b></td>
                <td><b>email</b></td>
                <td><b>age</b></td>
                <td><b>salary</b></td>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->salary }}</td>
                </tr>
            @endforeach
        </table>
    </x-layout>
