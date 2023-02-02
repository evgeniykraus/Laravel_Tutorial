### Задача №1

При получении данных из таблицы с юзерами оставьте в выборке только поля name и email.

    public function show()
    {
        $users = DB::table('users')->select('name', 'email')->get();
    
        return view('user.show', ['users' => $users]);
    }

### Задача №2

При получении данных из таблицы с юзерами переименуйте поле email на user_email.

    public function show()
    {
        $users = DB::table('users')->select('name', 'email as user_email')->get();
    
        return view('user.show', ['users' => $users]);
    }