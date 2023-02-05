### Задача №1

Сделайте следующие таблицы:

#### cities

* id
* name
* population
* country_id

#### countries

* id
* name


Я просто в IDE добавил столбец __population__ к таблице __cities__

### Задача №2

Свяжите таблицу countries с таблицей cities отношением hasMany.

Уже была связана

### Задача №3

Получите все страны вместе с их городами, население в которых больше 100 тысяч.

    public function show()
    {
        $countries = Country::with(['cities' => function ($query) {
            $query->where('population', '>', 100000);
        }])->get();

        return view('country.show', ['countries' => $countries]);
    }

### Задача №4

Получите все страны вместе с их городами. Города каждой страны отсортируйте по возрастанию населения.

    public function show()
    {
        $countries = Country::with(['cities' => function ($query) {
            $query->where('population', '>', 100000)->orderBy('population');
        }])->get();

        return view('country.show', ['countries' => $countries]);
    }