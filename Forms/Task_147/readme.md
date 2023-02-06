### Задача №1

Сделайте маршрут, в котором параметрами передаются id и логин юзера. 
Отравьте форму на этот маршрут. Получите и данные формы, и параметры маршрута.

Контроллер:

    <?php
    
    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    
    class UserController extends Controller
    {
        public function form(Request $request, $id, $login)
        {
            dump("id = $id, login = $login");
            dump($request->all());
    
            return view('user.form');
        }
    }

Роут:

    Route::match(['get', 'post'], '/user/{id}/{login}', [UserController::class, 'form']);

Вьюхa:

    <form action="" method="post">
        @csrf
        <input type="text" name="param1">
        <input type="text" name="param2">
        <button type="submit">Submit</button>
    </form>
