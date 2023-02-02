### Задача №1

Получите всех юзеров и отсортируйте их по возрастанию поля created_at.

    public function show()
    {
        $users = DB::table('users')
            ->oldest('created_at')
            ->get();

        return view('user.show', ['users' => $users]);
    }

### Задача №2

Получите всех юзеров и отсортируйте их по убыванию поля created_at.

    public function show()
    {
        $users = DB::table('users')
            ->latest('created_at')
            ->get();

        return view('user.show', ['users' => $users]);
    }

### Задача №3

Получите юзеров с возрастом больше 30 и отсортируйте их по возрастанию поля created_at.

    public function show()
    {
        $users = DB::table('users')
            ->where('age', '>', 30)
            ->oldest('created_at')
            ->get();

        return view('user.show', ['users' => $users]);
    }

### Задача №3

Получите всех юзеров и отсортируйте их по убыванию поля updated_at.

    public function show()
    {
        $users = DB::table('users')
            ->latest('updated_at')
            ->get();

        return view('user.show', ['users' => $users]);
    }

### Задача №3

Получите юзеров с возрастом больше 30 и отсортируйте их по возрастанию поля updated_at.

    public function show()
    {
        $users = DB::table('users')
            ->where('age', '>', 30)
            ->oldest('updated_at')
            ->get();

        return view('user.show', ['users' => $users]);
    }