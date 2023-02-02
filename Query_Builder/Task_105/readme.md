### Задача №1

Получите первых 3 юзера.

    public function show()
    {
        $users = DB::table('users')
            ->take(3)
            ->get();

        return view('user.show', ['users' => $users]);
    }

### Задача №2

Получите первых 3 юзера с возрастом, равным 30.

    public function show()
    {
        $users = DB::table('users')
            ->where('age', 30)
            ->take(3)
            ->get();

        return view('user.show', ['users' => $users]);
    }