### Задача №1

С помощью artisan сгенерируйте модель для таблицы cities.
    
    php artisan make:model City

    <?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    
    class City extends Model
    {
        use HasFactory;
    }


### Задача №2

С помощью artisan сгенерируйте модель для таблицы users.

    php artisan make:model User

    <?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    
    class User extends Model
    {
        use HasFactory;
    }