# Пагинация в Laravel

## Придумайте самостоятельно задачу на изученную тему и решите

Заполнил таблицу с юзерами тестовыми данными и реализовал их вывод на страницу по 10 юзеров.

Контроллер:

    <?php
    
    namespace App\Http\Controllers;
    
    use App\Models\User;
    
    class UserController extends Controller
    {
        public function show()
        {
            $users = User::simplePaginate(10);
    
            return view('user.show', ['users' => $users]);
        }
    }

Вьюха:

    <table border="1">
        <tr>
            <td><b>ID</b></td>
            <td><b>NAME</b></td>
            <td><b>SURNAME</b></td>
            <td><b>EMAIL</b></td>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->surname}}</td>
                <td>{{$user->email}}</td>
            </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ $users->previousPageUrl()}}">
            <-
        </a>
        <span>  {{ $users->currentPage()}}  </span>
        <a href="{{ $users->nextPageUrl()}}">
            ->
        </a>
    </div>

