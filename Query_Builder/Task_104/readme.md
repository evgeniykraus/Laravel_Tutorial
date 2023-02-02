### Задача №1

Получите всех юзеров, отсортированных в случайном порядке.

    public function show()
    {
        $users = DB::table('users')
            ->inRandomOrder()
            ->get();

        return view('user.show', ['users' => $users]);
    }

### Задача №2

Получите одного случайного юзера.

_чтобы вьюху не переделывать, вывел через dd_

    public function show()
    {
        $users = DB::table('users')
            ->inRandomOrder()
            ->first();
        dd($users);

    //        return view('user.show', ['users' => $users]);
    }

### Задача №3

Получите всех юзеров с возрастом от 20 до 30, отсортированных в случайном порядке.

    public function show()
    {
        $users = DB::table('users')
            ->whereBetween('age', [20, 30])
            ->inRandomOrder()
            ->get();

        return view('user.show', ['users' => $users]);
    }

### Задача №4

Получите одного случайного юзера с возрастом от 20 до 30.

_чтобы вьюху не переделывать, вывел через dd_

    public function show()
    {
        $users = DB::table('users')
            ->whereBetween('age', [20, 30])
            ->inRandomOrder()
            ->first();
        dd($users);
    //        return view('user.show', ['users' => $users]);
    }