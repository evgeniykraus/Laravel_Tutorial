### Задача №1

Свяжите таблицу cities с таблицей countries отношением belongsTo.

    class City extends Model
    {
        use HasFactory;
    
        public $timestamps = false;
    
        public function country()
        {
            return $this->belongsTo(City::class);
        }
    }

### Задача №2

Получите город вместе с его страной.

    class CityController extends Controller
    {
        public function show()
        {
            $city = City::query()->find(3);

            dump($city);
            dump($city->country);
        }
    }

### Задача №3

Получите все города вместе с их странами.

    class CityController extends Controller
    {
        public function show()
        {
            $cities = City::all();

            foreach ($cities as $city) {
                dump("Город: $city->name | Страна: {$city->country->name}");
            }
        }
    }

### Задача №4

Получите все города с населением больше 100 тысяч вместе с их странами.

    class CityController extends Controller
    {
        public function show()
        {
            $cities = City::all()->where('population', '>', 100000);
    
            foreach ($cities as $city) {
                dump("Город: $city->name | Население: $city->population | Страна: {$city->country->name}");
            }
        }
    }