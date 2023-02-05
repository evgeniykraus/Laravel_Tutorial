### Задача №1

Для таблиц, созданных в предыдущем уроке получите все страны вместе с их городами.

### Задача №2

Передайте полученные данные в представление и выведите их.

    <?php
    
    namespace App\Http\Controllers;
    
    use App\Models\Country;
    
    class CountryController extends Controller
    {
        public function show()
        {
            $countries = Country::all();
            
            return view('country.show', ['countries' => $countries]);
        }
    }

Вьюха:

    @foreach($countries as $country)
        <div>
            <h2>{{$country->name}}</h2>
            <ul>
                @foreach($country->city as $city)
                    <li>{{$city->name}}</li>
                @endforeach
            </ul>
        </div>
    @endforeach




