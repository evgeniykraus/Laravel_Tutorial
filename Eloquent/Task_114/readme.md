### Задача №1

Подключите модель Users к вашему контроллеру.

    <?php
    
    namespace App\Http\Controllers;
    
    use Illuminate\Support\Facades\DB;
    use App\Models\User;
    
    class UserController extends Controller
    {
        public function show()
        {
            $users = DB::table('users')
                ->select('users.*', 'cities.name as city')
                ->leftJoin('cities', 'cities.id', '=', 'users.city_id')
                ->get();
    
            return view('user.show', ['users' => $users]);
        }
    }
