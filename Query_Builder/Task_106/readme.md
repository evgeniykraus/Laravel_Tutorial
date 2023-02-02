### Задача №1

Получите 10 юзеров, начиная с пятого.

    public function show()
    {
        $users = DB::table('users')
            ->skip(4)
            ->take(10)
            ->get();

        return view('user.show', ['users' => $users]);
    }

### Задача №2

Получите 10 юзеров с возрастом 30, начиная с третьего.

    public function show()
    {
        $users = DB::table('users')
            ->whereAge(30)
            ->skip(2)
            ->take(10)
            ->get();

        return view('user.show', ['users' => $users]);
    }