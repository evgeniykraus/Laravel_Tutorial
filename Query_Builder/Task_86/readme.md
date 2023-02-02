### Задача №1

Получите все записи из таблицы users.

### Задача №2

Переберите полученные записи циклом и выведите каждую из записей.

#### Ответ:

Контроллер: 

    <?php
    
    namespace App\Http\Controllers;
    
    use Illuminate\Support\Facades\DB;
    
    class UserController extends Controller
    {
        public function show()
        {
            $users = DB::table('users')->get();
    
            foreach ($users as $user) {
                dump($user);
            }
        }
    }

Роут:

    Route::get('/users', [UserController::class, 'show']);

Пример вывода:

    {#380 ▼ // app\Http\Controllers\UserController.php:14
    +"id": 1
    +"name": "name_1"
    +"email": "qHRmx750gf@gmail.com"
    +"age": 58
    +"salary": 280
    +"created_at": "2023-02-01 14:13:25"
    +"updated_at": "2023-02-01 14:13:25"
    }
    {#382 ▼ // app\Http\Controllers\UserController.php:14
    +"id": 2
    +"name": "name_2"
    +"email": "X5roT1qvPG@gmail.com"
    +"age": 60
    +"salary": 478
    +"created_at": "2023-02-01 14:13:25"
    +"updated_at": "2023-02-01 14:13:25"
    }
    {#383 ▼ // app\Http\Controllers\UserController.php:14
    +"id": 3
    +"name": "name_3"
    +"email": "dVDjoZ1yGQ@gmail.com"
    +"age": 57
    +"salary": 597
    +"created_at": "2023-02-01 14:13:25"
    +"updated_at": "2023-02-01 14:13:25"
    }