### Задача №1

Получите все записи из таблицы users и выведите их в представлении в виде HTML таблицы.

#### Ответ:

Контроллер:

    <?php

    namespace App\Http\Controllers;
    
    use Illuminate\Support\Facades\DB;
    
    class UserController extends Controller
    {
        public function show()
        {
            $users = DB::table('users')->get();
        
            return view('user.show', ['users' => $users]);
        }
    }

Роут:

    Route::get('/users', [UserController::class, 'show']);

Представление:

    Дерриктория: resources/views/user/show.blade.php

    <x-layout>
        <table border="1">
            <tr>
                <td><b>id</b></td>
                <td><b>name</b></td>
                <td><b>email</b></td>
                <td><b>age</b></td>
                <td><b>salary</b></td>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->salary }}</td>
                </tr>
            @endforeach
        </table>
    </x-layout>
    