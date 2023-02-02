### Задача №1

Подключите фасад DB к контроллеру юзеров.

Ответ: 

    <?php
    
    namespace App\Http\Controllers;
    
    use Illuminate\Support\Facades\DB;
    
    class UserController extends Controller
    {
        public function show()
        {
    
        }
    }