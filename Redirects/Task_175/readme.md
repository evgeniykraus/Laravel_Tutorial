### Задача №1

Выполните редирект с одного действия контроллера на другой.

    class UserController extends Controller
    {
        public function show1()
        {
        return redirect('user/show2');
        }
    
        public function show2()
        {
            return 'show2';
        }
    }

### Задача №2

Сделайте форму, спрашивающую у пользователя число.
После отправки формы, если введено число от 1 до 10, выполните
редирект на другое действие.

Форма:

    <form action="{{ route('check_number') }}" method="post">
        @csrf
        <p>Введите число</p>
        <label>
            <input type="number" name="number">
        </label>
        <input type="submit">
    </form>

Роуты:

    Route::match(['get', 'post'], '/user/number', [UserController::class, 'checkNumber'])->name('check_number');
    Route::get('/user/redirect', [UserController::class, 'redirect'])->name('redirect');

Контроллер:

    class UserController extends Controller
    {
        public function checkNumber(Request $request)
        {
            $number = $request->input('number');

            if ($number >= 1 && $number <= 10) {
                return redirect()->route('redirect');
            } else {
                return view('user.index');
            }
        }
    
        public function redirect()
        {
            return 'Вы были перенаправлены';
        }
    }