<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Solicitud;
use App\Services\TicketService;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function view($id)
    {
        return view('tickets.response')
            ->with('ticket', Solicitud::findOrFail(decrypt($id)));
    }

    public function response(Request $request, TicketService $ticketService)
    {
        $validation = $request->validate([
            'id_solicitud' => 'required|exists:solicitud,id_solicitud',
            'respuesta' => 'required|string',
            'estatus' => [
                'required',
                'regex:/RESUELTO/'
            ]
        ]);

        $ticketService->update($request->all());

        return redirect(route('ticket.show'));
    }
}
