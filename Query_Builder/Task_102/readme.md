### Задача №1

Получите всех юзеров и отсортируйте их по возрастанию возраста.

    public function show()
    {
        $users = DB::table('users')
            ->orderBy('age')
            ->get();

        return view('user.show', ['users' => $users]);
    }

### Задача №1

Получите всех юзеров и отсортируйте их по убыванию зарплаты.

    public function show()
    {
        $users = DB::table('users')
            ->orderBy('salary', 'DESC')
            ->get();

        return view('user.show', ['users' => $users]);
    }