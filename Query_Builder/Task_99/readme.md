### Задача №1

Проверьте на NULL при выборке из какого-либо поля таблицы с юзерами.

Ищет где поле updated_at IS NULL:

    public function show()
    {
        $users = DB::table('users')
            ->whereNull('updated_at')->get();

        return view('user.show', ['users' => $users]);
    }

Ищет где поле updated_at IS NOT NULL:

    public function show()
    {
        $users = DB::table('users')
            ->whereNotNull('updated_at')->get();

        return view('user.show', ['users' => $users]);
    }