Сделайте так, чтобы у вас было действие, которое будет срабатывать по следующему адресу: 
/test/method/. 
Перейдите по указанному адресу, но с GET параметром, например, так: /test/method?param=1. 
Решите все задачи ниже для данного адреса с GET параметром.

### Задача №1

Для указанного адреса выведите результат метода path.

### Задача №2

Для указанного адреса выведите результат метода url.

### Задача №3

Для указанного адреса выведите результат метода fullUrl.


Роут:

    Route::get('/user/test/method', [UserController::class, 'testMethod']);

Контроллер: 

    public function testMethod(Request $request)
    {
        dump($request->path());
        dump($request->url());
        dump($request->fullUrl());
        dump($request->isMethod('get'));
    }