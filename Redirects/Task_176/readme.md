### Задача №1

Сделайте отдельную страницу с формой для добавления юзера.

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <label>Name:
            <input type="text" name="name">
        </label>
        <label>Surname:
            <input type="text" name="surname">
        </label>
        <label>Email
            <input type="text" name="email">
        </label>
        <input type="submit" value="Добавить">
    </form>
    <div>
        <form action="{{route('users.index')}}" method="get">
            <input type="submit" value="Назад">
        </form>
    </div>

### Задача №2

После сохранения юзера выполните редирект на страницу со списком юзеров.

Контроллер:

    class UserController extends Controller
    {
        public function index()
        {
            $users = User::query()->get(['id', 'name', 'surname', 'email']);
    
            return view('user.index', ['users' => $users]);
        }
    
        public function create()
        {
            return view('user.create');
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required',
                'surname' => 'required',
                'email' => 'required',
            ]);
    
            User::create($request->all());
    
            return redirect()->route('users.index');
        }
    }   

Роуты:

    Route::resource('users', UserController::class);