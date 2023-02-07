### Задача №1

Отдайте в качестве ответа статус 201 и некоторый текст.

    public function show()
    {
        return new Response('некоторый текст', '201');
    }

### Задача №2

Отдайте в качестве ответа статус 404 и некоторый текст.

    public function show()
    {
        return new Response('некоторый текст', '404');
    }

### Задача №3

Отдайте в качестве ответа статус 404 и некоторый текст,
используя вспомогательную функцию для ответа.

    public function show()
    {
        return response('некоторый текст', 404);
    }

### Задача №4

Отдайте файл представления с каким-нибудь заголовком.

    public function show()
    {
        return response()
            ->view('test.index')
            ->header('Content-Type', 'text/plain');

    }