<?php

namespace Tests\Unit;

use App\Services\TicketService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TicketTest extends TestCase
{
    use withFaker,
        RefreshDatabase;

    public function testUpdateTicket()
    {
        $ticketService = new TicketService();

        $module = factory(\App\Models\CatModulo::class)->create();
        $user = factory(\App\User::class)->create([
            'modulo_id' => $module->id_modulo
        ]);
        $system = factory(\App\Models\CatSistema::class)->create();
        $ticket = factory(\App\Models\Solicitud::class)->create([
            'sistema_id' => $system->id_sistema,
            'user_creacion_id' => $user->id_user
        ]);

        $incidence = 'Lorem ipsum dolor sit amet consectetur adipiscing elit arcu, augue iaculis quisque molestie penatibus risus ut, eget cubilia tristique fames cras velit fringilla semper, nam dictum a tempor hac natoque. Arcu tellus senectus sociis mauris montes primis gravida sapien, ultricies ligula dui rutrum per elementum ac felis, maecenas auctor class praesent euismod metus torquent. Feugiat condimentum eget lectus dapibus nam felis praesent aenean ac etiam nullam faucibus vivamus tempor a curae, sodales vehicula litora neque rhoncus cubilia vitae odio id aliquam fringilla platea eros cum tincidunt. Elementum sem primis vitae interdum magnis nascetur curabitur condimentum mollis, neque scelerisque bibendum mus semper eros nunc hendrerit malesuada, potenti sociis litora laoreet cum porta odio diam.';

        $image[] = $this->faker()->image();

        $data = [
            'id_solicitud' => $ticket->id_solicitud,
            'incidencia' => $ticket->incidencia . '\n' . $incidence,
            'imagenes' => $image,
            'sistema_id' => $system->id_sistema
        ];

        $ticketService->update($data);

        $this->assertDatabaseHas('solicitud', [
            'incidencia' => $ticket->incidencia . '\n' . $incidence
        ]);

        $this->assertDatabaseHas('cat_imagen', [
            'imagen' => base64_encode($image[0])
        ]);
    }
}
