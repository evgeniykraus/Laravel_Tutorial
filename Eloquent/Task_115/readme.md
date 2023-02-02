### Задача №1

Получите всех юзеров.

### Задача №2

Передайте юзеров в представление и выведите их в виде HTML таблицы.

    <?php
    
    namespace App\Http\Controllers;
    
    use App\Models\User;
    
    class UserController extends Controller
    {
        public function show()
        {
            $users = User::all();
    
            return view('user.show', ['users' => $users]);
        }
    }
