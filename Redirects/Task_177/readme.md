### Задача №1

Сделайте именованный маршрут. Выполните на него редирект с другого действия.

Контроллер:

    class TestController extends Controller
    {
        public function show()
        {
            return redirect()->route('test_redirect');
        }
    
        public function redirect()
        {
            return 'Редирект на именованный маршрут';
        }
    }

Роуты:

    Route::get('test', [TestController::class, 'show']);
    Route::get('test/redirect', [TestController::class, 'redirect'])->name('test_redirect');