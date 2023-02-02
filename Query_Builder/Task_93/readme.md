### Задача №1

Получите юзеров, у которых зарплата равна 500 либо возраст от 20 до 30.

    $users = DB::table('users')
        ->Where('salary', 500)
        ->orWhere(function ($query) {
            $query
                ->Where('age', '>' ,19)
                ->Where('age', '<' ,31);
    })
        ->get();

### Задача №1

Получите юзеров, у которых возраст от 20 до 30, либо зарплата от 400 до 800.

    $users = DB::table('users')
        ->where(function ($query) {
            $query
                ->where('age', '>', 19)
                ->where('age', '<', 31);
        })
        ->orWhere(function ($query) {
            $query
                ->where('salary', '>', 399)
                ->where('salary', '<', 801);
        })
        ->get();