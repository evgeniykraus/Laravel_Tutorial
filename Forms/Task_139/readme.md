### Задача №1

Внедрите объект запроса в действие вашего контроллера.

### Задача №2

Сделайте форму с тремя инпутами, в которые будут вводиться числа. После отправки формы найдите сумму введенных чисел и
передайте ее в представление.

Форма

    <form action="/user/result">
        <label>
            <input name="num1">
        </label>
        <label>
            <input name="num2">
        </label>
        <label>
            <input name="num3">
        </label>
        <input type="submit">
    </form>

Вывод формы

    public function form()
    {
        return view('user.form');
    }

Расчет и вывод формы с результатом

    public function result(Request $request)
    {
        $sum = 0;
        foreach ($request->query as $num) {
            $sum += $num;
        }

        return view('user.result', ['res' => [$sum]]);
    }