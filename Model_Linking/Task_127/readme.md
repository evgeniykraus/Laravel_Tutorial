### Задача №1

Получите всех пользователей вместе с их профилями, передайте их в представление и выведите на экран в виде HTML таблицы.

    public function show()
    {
        $users = User::all();

        return view('user.show', [
            'users' => $users,
        ]);
    }

Вьюха:

    <x-layout>
        <table border="1">
            <tr>
                <td><b>id</b></td>
                <td><b>name</b></td>
                <td><b>surname</b></td>
                <td><b>email</b></td>
                <td><b>login</b></td>
                <td><b>password</b></td>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->profile->name }}</td>
                    <td>{{ $user->profile->surname }}</td>
                    <td>{{ $user->profile->email }}</td>
                    <td>{{ $user->login }}</td>
                    <td>{{ $user->password }}</td>
                </tr>
            @endforeach
        </table>
    </x-layout>
