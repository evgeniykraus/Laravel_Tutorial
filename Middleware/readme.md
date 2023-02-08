### Задача №1

Сделайте посредник, который будет запускаться для каждого HTTP запроса вашего сайта. В этом посреднике сделайте счетчик
посещений страниц сайта пользователем. Пусть счетчик работает на сессиях.

Создал посредника:

    $ php artisan make:middlewair CountMiddlewaire

Посредник: 

    <?php
    
    namespace App\Http\Middleware;
    
    use Closure;
    use Illuminate\Http\Request;
    
    class CountMiddleware
    {
        public function handle(Request $request, Closure $next)
        {
            $count = $request->session()->get('count', 0);
            $request->session()->put('count', ++$count);
    
            return $next($request);
        }
    }

Добавил его для всех путей:

    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\CountMiddleware::class,
    ]

Добавил в лойаут вывод:

    <x-count>
        {{session('count')}}
    </x-count>

Все работает, только во время редиректов счетчик тоже увеличивается.