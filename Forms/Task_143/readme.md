### Задача №1

Пусть в вашей форме есть произвольное количество инпутов.
После отправки формы получите массив отправленных значений,
отправьте его в представление и выведите эти данные в виде списка ul.

Контроллер:

    <?php
    
    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    
    class UserController extends Controller
    {
        public function form(Request $request)
        {
            dump($request->all());
            return view('user.form', ['request' => $request->all()]);
        }
    }

Роут:

    Route::match(['get', 'post'],'/user/form', [UserController::class, 'form']);

Вьюхa:

    <form action="" method="POST">
        @csrf
        <label>
            <input name="num1">
        </label>
        <label>
            <input name="num2">
        </label>
        <label>
            <input name="num3">
        </label>
        <label>
            <input name="num4">
        </label>
        <label>
            <input name="num5">
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
