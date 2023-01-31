### Задача №1

Сделайте так, чтобы при обращении на адрес /user вызывалось действие show контроллера UserController.


    Route::get('/user', [UserController::class, 'show']);
### Задача №2

Сделайте так, чтобы при обращении на адрес /user/all вызывалось действие all контроллера UserController.

    Route::get('/user/all', [UserController::class, 'all']);

Код контроллера:

    <?php
    
    namespace App\Http\Controllers;

    class UserController extends Controller
    {
        public function show(): string
        {
            return "функция show контроллера UserController";
        }
    
        public function all(): string
        {
            return 'функция all контроллера UserController';
        }
    }