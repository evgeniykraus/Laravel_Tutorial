### Задача №1

С помощью формы спросите у пользователя его город и страну. После отправки формы выведите эти данные над формой в
отдельном абзаце.

Контроллер:

    <?php
    
    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    
    class UserController extends Controller
    {
        public function form(Request $request)
        {
            return view('user.form', ['request' => $request]);
        }
    }

Роут:

    Route::match(['get', 'post'],'/user/form', [UserController::class, 'form']);

Вьюхa:

    <form action="" method="POST">
        @csrf
        <p> {{$request->city}} </p>
        <p> {{$request->country}} </p>
        <label> Город:
            <input name="city">
        </label>
        <label> Страна:
            <input name="country">
        </label>
        <input type="submit">
    </form>