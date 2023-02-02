### Задача №1

Получите всех юзеров с возрастом 30 или id, большем 4.

    $users = DB::table('users')
        ->where('age', 30)
        ->orWhere('id', '>', 4)
        ->get();

### Задача №1

Получите всех юзеров с возрастом 30, или зарплатой 500, или id, большем 4,

    $users = DB::table('users')
        ->where('age', 30)
        ->orWhere('salary',500)
        ->orWhere('id', '>', 4)
        ->get();