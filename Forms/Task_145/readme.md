### Задача №1

С помощью формы спросите у пользователя его имя, фамилию, email, логин, пароль. 
После отправки формы выведите на экран в
виде списка ul все отправленные поля, кроме поля с паролем и email.

Контроллер:

    <?php
    
    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    
    class UserController extends Controller
    {
        public function form(Request $request)
        {
            return view('user.form', ['request' => $request->except('_token', 'email', 'password')]);
        }
    }

Роут:

    Route::match(['get', 'post'],'/user/form', [UserController::class, 'form']);

Вьюхa:

    <form action="" method="POST">
        @csrf
        <label> Name:
            <input name="name">
        </label>
        <label> Surname:
            <input name="surname">
        </label>
        <label> Email:
            <input name="email">
        </label>
        <label> Login:
            <input name="login">
        </label>
        <label> Password:
            <input name="password">
        </label>
        <input type="submit">
        <ul>
            @foreach($request as $input)
                <li>
                    {{$input}}
                </li>
            @endforeach
        </ul>
    </form>
