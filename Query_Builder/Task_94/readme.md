### Задача №1

Получите юзера с id, равным 3.

    public function show()
    {
        $user = DB::table('users')->whereId(3)->first();

        return view('user.show', ['user' => $user]);
    }

### Задача №2

Передайте в представление юзера, полученного в предыдущей задаче. Выведите его имя, возраст и email в отдельных абзацах.

    <x-layout>
        <p><b>name:</b> {{ $user->name }}</p>
        <p><b>email:</b> {{ $user->email }}</p>
        <p><b>age:</b> {{ $user->age }}</p>
    </x-layout>