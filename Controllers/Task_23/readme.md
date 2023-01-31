### Задача №1

Сделайте маршрут, обрабатывающий адреса вида /user/:name.

    Route::get('/user/{name}', [UserController::class, 'showName']);

### Задача №2

Сделайте маршрут, обрабатывающий адреса вида /user/:surname/:name.

    Route::get('/user/{surname}/{name}', [UserController::class, 'showFullName']);

Код контроллера:

    <?php
    
    namespace App\Http\Controllers;
    
    class UserController extends Controller
    {
        public function showName($name): string
        {
            return "функция showName контроллера UserController. Имя = $name";
        }
    
        public function showFullName($surname, $name): string
        {
            return "функция showFullName контроллера UserController. Полное имя = $surname $name";
        }
    }
