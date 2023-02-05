### Задача №1

Свяжите таблицы с юзерами и профилями отношением belongsTo.

    <?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Model;
    
    class Profile extends Model
    {
        public function user()
        {
            return $this->belongsTo(User::class);
        }
    }

### Задача №2

Получите профиль вместе с его юзером.

    <?php
    
    namespace App\Http\Controllers;
    
    use App\Models\Profile;
    
    class ProfileController extends Controller
    {
        public function show()
        {
            $profile = Profile::query()->find(2);
    
            dump($profile->name);
            dump($profile->user->id);
            dump($profile->user->login);
        }
    }

### Задача №3

Получите все профили вместе с их юзерами. Выведите их в представлении в виде HTML таблицы.

    <?php
    
    namespace App\Http\Controllers;
    
    use App\Models\Profile;
    
    class ProfileController extends Controller
    {
        public function show()
        {
            $profiles = Profile::all();
    
            return view('profile.show', ['profiles' => $profiles]);
        }
    }

Добавил отдельную вьюху:

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
            @foreach($profiles as $profile)
                <tr>
                    <td>{{ $profile->user->id }}</td>
                    <td>{{ $profile->name }}</td>
                    <td>{{ $profile->surname }}</td>
                    <td>{{ $profile->email }}</td>
                    <td>{{ $profile->user->login }}</td>
                    <td>{{ $profile->user->password }}</td>
                </tr>
            @endforeach
        </table>
    </x-layout>

