### Задача №1

Наложите глобальное ограничение на параметр slug. Пусть он может содержать буквы и цифры, а также дефис и подчеркивание.

    public function boot()
    {
    $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });

        Route::pattern('slug', '^[a-zA-Z0-9_-]+$');
        ____________________________________________
    }