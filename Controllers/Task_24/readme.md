# Пусть есть массив с именами юзеров и их городами:

    <?php
        $users = [
            'user1' => 'city1',
            'user2' => 'city2',
            'user3' => 'city3',
            'user4' => 'city4',
            'user5' => 'city5',
        ];
    ?>

### Задача №1

Создайте маршрут, который параметром будет принимать имя юзера, а в браузер результатом отправлять его город.

    Route::get('/user/{name}', [UserController::class, 'getUserCity']);

### Задача №2

Сделайте так, чтобы, если параметром передано несуществующее имя, в браузер выводилось сообщение об этом.

    <?php
    
    namespace App\Http\Controllers;
    
    class UserController extends Controller
    {
        private array $users;
    
        public function __construct()
        {
            $this->users = [
                'user1' => 'city1',
                'user2' => 'city2',
                'user3' => 'city3',
                'user4' => 'city4',
                'user5' => 'city5',
            ];
        }
    
        public function getUserCity(string $name): string
        {
            return $this->users[$name] ?? 'Error: Передано несуществующее имя.';
        }
    }