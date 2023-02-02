### Задача №1

Получите юзера с id, равным 3.

    public function show()
    {
        $users = DB::table('users')
            ->where('id', 3)->first();
        
        return view('user.show', ['users' => $users]);
    }

### Задача №2

Передайте в представление юзера, полученного в предыдущей задаче. Выведите его имя, возраст и email в отдельных абзацах.

    <x-layout>
        <p><b>name:</b> {{ $users->name }}</p>
        <p><b>email:</b> {{ $users->email }}</p>
        <p><b>age:</b> {{ $users->age }}</p>
    </x-layout>