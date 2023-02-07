### Задача №1

Получите в своем контроллере объект с сессией.

    public function show(Request $request)
    {
        dump($request->session());
    }

### Задача №2

В одном действии контроллера установите какое-нибудь значение в сессию, а во втором - получите его.

    public function show(Request $request)
    {
        $request->session()->put('count', 123);

        dump($request->session()->get('count'));
    }

### Задача №3

Используя сессии, выведите в каком-нибудь представлении счетчик, показывающий количество обновлений страницы.

    public function show(Request $request)
    {
        $count = $request->session()->get('count', 0);
        $request->session()->put('count', ++$count);

        return view('user.index', compact('count'));
    }

### Задача №4

Запишите в сессию время первого захода пользователя на страницу. При обновлении страницы (и при первом заходе тоже)
выводите это время на экран.

    public function show(Request $request)
    {
        $count = $request->session()->get('count', 0);
        $request->session()->put('count', ++$count);

        $time = $request->session()->get('first_visit_time', date('Y-m-d H:i:s'));
        $request->session()->put('first_visit_time', $time);

        return view('user.index', compact('count', 'time'));
    }

### Задача №5

Удалите какую-нибудь переменную из сессии.

    public function show(Request $request)
    {
        $request->session()->get('count', 1);

        $request->session()->forget('count');

        dump($request->session()->get('count') === null);
    }

### Задача №6

Сделайте два действия в контроллере. В первом действии установите какую-нибудь переменную сессии, а во втором действии
выведите значение этой переменной на экран (передав ее в представление), а затем удалите переменную из сессии.

    public function show(Request $request)
    {
        $request->session()->put('count', 222);

        $count = $request->session()->pull('count', 111);

        return view('user.index', compact('count'));
    }

### Задача №7

Очистите вашу сессию от заданных переменных.

    public function show(Request $request)
    {
        $request->session()->flush();
    }

### Задача №8

Установите несколько переменных сессии. Получите эти установленные переменные в виде массива.

    public function show(Request $request)
    {
        $request->session()->put('var_1', 111);
        $request->session()->put('var_2', 222);
        $request->session()->put('var_3', 333);
        $request->session()->put('var_4', 444);

        dump($request->session()->all());
    }

### Задача №9

Проверьте, существует ли в сессии переменная time. Если существует - выведите на экран ее значение, а если не
существует - установите ее значение в текущий момент времени.

    public function show(Request $request)
    {
        if ($request->session()->exists('time')) {
            dump($request->session()->get('time'));
        } else {
            $request->session()->put('time', date('H:i:s'));
        }
    }

### Задача №10

Запишите в переменную сессии массив с числами.

    public function show(Request $request)
    {
        $request->session()->put('arr', [1, 2, 3]);

        dump($request->session()->get('arr'));
    }

### Задача №11

Добавьте к массиву из предыдущей задачи еще одно число.

    public function show(Request $request)
    {
        $request->session()->push('arr', 4);

        dump($request->session()->get('arr'));
    }

### Задача №12

С помощью глобальной функции session сохраните какие-нибудь данные в сессию.

    <?php
        session(['test' => 'test_value']);
    ?>

### Задача №13

С помощью глобальной функции session получите сохраненные данные из сессии.

    <?php
        dump(session('test', 'default'));
    ?>