### Задача №1

Выберите задачу из предыдущих уроков и переделайте код на жадную загрузку множественных отношений.

    <?php
    
    namespace App\Http\Controllers;
    
    use App\Models\Client;
    
    class ClientController extends Controller
    {
        public function show()
        {
            $clients = Client::with(['city', 'position'])->get();
    
            foreach ($clients as $client) {
                dump("Имя клиента: $client->name | Должность: {$client->position->name} | Город: {$client->city->name}");
            }
        }
    }
