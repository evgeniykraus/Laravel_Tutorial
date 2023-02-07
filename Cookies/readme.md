### Задача №1

В одном действии контроллера установите куку, а в другом - прочитайте ее.

    class TestController extends Controller
    {
        public function setCookie()
        {
            return response('установил куки')->cookie(
            'test', 'test_value', 10);
        }

        public function getCookie(Request $request)
        {
            dump($request->cookie('test'));
        }
    }

### Задача №2

Реализуйте счетчик обновления страницы, работающий на куки.

    public function setCookie(Request $request)
    {
        $count = $request->cookie('count') ?: 0;
        $count++;

        return response('Количество обновлений ' . $count)->withCookie(cookie('count', $count, 10));
    }

### Задача №3

Поставьте в очередь три куки.

    public function setCookie()
    {
        Cookie::queue('name1', 'value1', 10);
        Cookie::queue('name2', 'value2', 10);
        Cookie::queue('name3', 'value3', 10);

        return response('добавил 3 куки в очередь');
    }