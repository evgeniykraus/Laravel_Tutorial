# Практические задачи

Пусть у нас есть юзеры и их роли. Каждый юзер может иметь много ролей. Даны соответствующие таблицы:

#### users

* id
* name

#### roles

* id
* name

### Задача №1

Создайте для указанных таблиц таблицу связи.

    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('role_id');
            $table->foreign('user_id')->on('users')->references('id');
            $table->foreign('role_id')->on('roles')->references('id');
        });
    }

### Задача №2

Свяжите юзеров с ролями отношением belongsToMany. Получите всех юзеров вместе с их ролями.

    class User extends Model
    {
    use HasFactory;
    
        public $timestamps = false;
    
        public function roles()
        {
            return $this->belongsToMany(Role::class);
        }
    }


    public function show()
    {
        $users = User::all();

        foreach ($users as $user) {
            dump("Имя пользователя: $user->name");
            foreach ($user->roles as $role) {
                dump("Роль: $role->name");
            }
        }

### Задача №3

Свяжите роли с юзерами отношением belongsToMany. Получите всех роли вместе с их юзерами.

    class Roles extends Model
    {
    use HasFactory;
    
        public $timestamps = false;
    
        public function users()
        {
            return $this->belongsToMany(User::class);
        }
    }

    class RoleController extends Controller
    {
    public function show()
    {
    $roles = Role::all();
    
            foreach ($roles as $role) {
                dump("Имя роли: $role->name");
                foreach ($role->users as $user) {
                    dump("Пользователь: $user->name");
                }
            }
        }
    }