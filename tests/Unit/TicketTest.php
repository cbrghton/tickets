<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Services\TicketService;

class TicketTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testEditTicket()
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

        $incidense = 'Lorem ipsum dolor sit amet consectetur adipiscing elit arcu, augue iaculis quisque molestie penatibus risus ut, eget cubilia tristique fames cras velit fringilla semper, nam dictum a tempor hac natoque. Arcu tellus senectus sociis mauris montes primis gravida sapien, ultricies ligula dui rutrum per elementum ac felis, maecenas auctor class praesent euismod metus torquent. Feugiat condimentum eget lectus dapibus nam felis praesent aenean ac etiam nullam faucibus vivamus tempor a curae, sodales vehicula litora neque rhoncus cubilia vitae odio id aliquam fringilla platea eros cum tincidunt. Elementum sem primis vitae interdum magnis nascetur curabitur condimentum mollis, neque scelerisque bibendum mus semper eros nunc hendrerit malesuada, potenti sociis litora laoreet cum porta odio diam.';

        $image[] = Storage::disk('public')->get('logo_dark.png');

        $estatus = $ticketService->edit($ticket->id_solicitud, $incidense, $image, $system->id_sistema);

        $this->assertTrue($estatus);
    }
}
