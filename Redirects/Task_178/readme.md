### Задача №1

Сделайте именованный маршрут с параметрами. 
Выполните редирект на данный маршрут, передав при этом значения параметров.

Контроллер:

    class TestController extends Controller
    {
        public function show()
        {
            return redirect()->route('test_redirect', ['val' => 111]);
        }
    
        public function redirect(Request $request)
        {
            return "Редирект на именованный маршрут с параметром $request->val";
        }
    }

Роуты:

    Route::get('test', [TestController::class, 'show'])->name('test');
    Route::get('test/redirect/{val}', [TestController::class, 'redirect'])->name('test_redirect');
