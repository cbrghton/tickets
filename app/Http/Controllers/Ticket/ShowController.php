<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Solicitud;
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        if (Auth::user()->hasRole('assign_ticket')) {
            $tickets = Solicitud::with('system', 'userCreate', 'userResponse')
                ->get();
        } elseif (Auth::user()->hasRole('response_ticket')) {
            $tickets = Solicitud::with('system', 'userCreate', 'userResponse')
                ->where([
                    ['user_creacion_id', '=', Auth::id()],
                    ['estatus', '=', 'PENDIENTE']
                ])
                ->orWhere('user_respuesta_id', Auth::id())
                ->get();
        } else {
            $tickets = Solicitud::with('system', 'userCreate', 'userResponse')
                ->where('user_creacion_id', Auth::id())
                ->orWhere('user_respuesta_id', Auth::id())
                ->get();
        }

        foreach ($tickets as $ticket) {
            $ticket->id_encrypt = encrypt($ticket->id_solicitud);
        }

        return view('tickets.show')->with([
            'tickets' => $tickets,
            'users' => Role::find('2')->users()->get()
        ]);
    }
}
