<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Solicitud;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $tickets = Solicitud::with('system', 'user_create', 'user_response')->get();

        foreach ($tickets as $ticket) {
            $ticket->id_encrypt = encrypt($ticket->id_solicitud);
        }

        return view('tickets.show')->with(
            'tickets', $tickets
        );
    }
}
