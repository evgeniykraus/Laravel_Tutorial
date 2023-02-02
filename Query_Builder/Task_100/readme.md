### Задача №1

Получите юзера с полем id, равным 3.

    public function show()
    {
        $users = DB::table('users')
            ->whereId('3')
            ->get();

        return view('user.show', ['users' => $users]);
    }

### Задача №2

Получите юзера с полем name, равным 'john'.

    public function show()
    {
        $users = DB::table('users')
            ->whereName('john')
            ->get();

        return view('user.show', ['users' => $users]);
    }

### Задача №3

Получите юзера с полем email, равным 'john@mail.com'.

    public function show()
    {
        $users = DB::table('users')
            ->whereEmail('john@mail.com')
            ->get();

        return view('user.show', ['users' => $users]);
    }