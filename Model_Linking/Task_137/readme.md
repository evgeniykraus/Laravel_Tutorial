### Задача №1

Включите жадную загрузку для предыдущей задачи

    <?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    
    class Client extends Model
    {
        use HasFactory;
    
        protected $with = ['city', 'position'];
    
        public $timestamps = false;
    
        public function city()
        {
            return $this->belongsTo(City::class);
        }
    
        public function position()
        {
            return $this->belongsTo(Position::class);
        }
    }

Измененный запрос

    class ClientController extends Controller
    {
        public function show()
        {
            $clients = Client::all();
    
            foreach ($clients as $client) {
                dump("Имя клиента: $client->name | Должность: {$client->position->name} | Город: {$client->city->name}");
            }
        }
    }