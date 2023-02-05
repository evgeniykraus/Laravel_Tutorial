### Задача №1

Выберите задачу из предыдущих уроков и переделайте код на жадную загрузку.

    <?php
    
    namespace App\Http\Controllers;
    
    use App\Models\User;
    
    class UserController extends Controller
    {
        public function show()
        {
            $users = User::with(['roles'])->find(1);
    
            foreach ($users->roles as $role) {
                dump($role->name);
            }
        }
    }