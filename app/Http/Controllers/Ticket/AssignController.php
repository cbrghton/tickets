<?php

namespace App\Http\Controllers\Ticket;

use App\Services\TicketService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssignController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services\TicketService $ticketService
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, TicketService $ticketService)
    {
        $validation = $request->validate([
            'id_solicitud' => 'required|exists:solicitud,id_solicitud',
            'user_respuesta_id' => 'required|exists:users,id_user'
        ]);

        $ticketService->update($request->all());

        return redirect(route('ticket.show'));
    }
}
