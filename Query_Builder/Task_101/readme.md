### Задача №1

Получите юзера с полем id, равным 3, И полем age, равным 20

    public function show()
    {
        $users = DB::table('users')
            ->whereIdAndAge(3, 20)
            ->get();

        return view('user.show', ['users' => $users]);
    }

### Задача №2

Получите юзера с полем id, равным 3, ИЛИ полем age, равным 20.

    public function show()
    {
        $users = DB::table('users')
            ->whereIdOrAge(3, 20)
            ->get();

        return view('user.show', ['users' => $users]);
    }