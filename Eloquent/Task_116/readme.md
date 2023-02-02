### Задача №1

Получите всех юзеров с возрастом 30.

    <?php
    
    namespace App\Http\Controllers;
    
    use App\Models\User;
    
    class UserController extends Controller
    {
        public function show()
        {
            $users = User::where('age', 30)->get();
    
            return view('user.show', ['users' => $users]);
        }
    }

### Задача №2

Получите всех юзеров с зарплатой от 100 до 300.

    <?php
    
    namespace App\Http\Controllers;
    
    use App\Models\User;
    
    class UserController extends Controller
    {
        public function show()
        {
            $users = User::query()->whereBetween('salary', [100, 300])->get();
    
            return view('user.show', ['users' => $users]);
        }
    }

### Задача №3

Получите всех юзеров, начиная с четвертого.

_User::query()->skip(3)->get();_ не срабатывал, ругался на синтаксис.

    public function show()
    {
        $users = User::query()->skip(3)->take(100)->get();

        return view('user.show', ['users' => $users]);
    }

### Задача №4

Получите всех юзеров, начиная с четвертого, 5 штук.

    public function show()
    {
        $users = User::query()->skip(3)->take(5)->get();

        return view('user.show', ['users' => $users]);
    }

### Задача №5

Получите всех юзеров с id, равным 1, 3, 4 или 5.

    public function show()
    {
        $users = User::query()->whereIn('id', [1, 3, 4, 5])->get();

        return view('user.show', ['users' => $users]);
    }
