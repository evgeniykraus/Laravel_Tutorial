## Задача №1

Создайте контроллер UserController и в нем сделайте действие show.

    <?php
    
    namespace App\Http\Controllers;

    class UserController extends Controller
    {
        public function show(): string
        {
            return "функция show контроллера UserController";
        }
    }