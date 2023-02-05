### Задача №1

Получите какого-нибудь юзера вместе с его профилем.

    <?php
    
    namespace App\Http\Controllers;
    
    use App\Models\User;
    
    class UserController extends Controller
    {
        public function show($id)
        {
            $user = User::query()->whereId($id)->first();
            return view('user.show', [
                'profile' => $user->profile,
                'user' => $user,
            ]);
        }
    }

### Задача №2

Отправьте полученного юзера в представление и выведите его данные в разных тегах.

Роут:

    Route::get('/users/{id}', [UserController::class, 'show']);

Вьюха:

    <x-layout>
        <table border="1">
            <tr>
                <td><b>id</b></td>
                <td><b>name</b></td>
                <td><b>surname</b></td>
                <td><b>email</b></td>
                <td><b>login</b></td>
                <td><b>password</b></td>
            </tr>
                <tr>
                    <td>{{ $profile->id }}</td>
                    <td>{{ $profile->name }}</td>
                    <td>{{ $profile->surname }}</td>
                    <td>{{ $profile->email }}</td>
                    <td>{{ $user->login }}</td>
                    <td>{{ $user->password }}</td>
                </tr>
        </table>
    </x-layout>