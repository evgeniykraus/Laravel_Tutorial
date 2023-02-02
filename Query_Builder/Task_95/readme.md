### Задача №1

Получите email юзера с id, равным 3.

    public function show()
    {
        $user_email = DB::table('users')
            ->where('id', 3)->value('email');

        return view('user.show', ['user_email' => $user_email]);
    }

### Задача №2

Передайте в представление email, полученный в предыдущей задаче. Выведите его в абзаце.

    <x-layout>
        <p><b>email:</b> {{$user_email}}</p>
    </x-layout>