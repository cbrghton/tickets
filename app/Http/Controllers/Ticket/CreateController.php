<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Models\CatSistema;
use App\Services\TicketService;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create()
    {
        return view('tickets.create')
            ->with('systems', CatSistema::all());
    }

    public function insert(Request $request, TicketService $ticketService)
    {
        $validation = $request->validate([
            'incidencia' => 'required|string',
            'sistema_id' => 'required|integer',
            'imagenes.*' => 'required|image|mimes:jpg,jpeg,png|max:1000'
        ]);

        $ticketService->insert($request->all());

        return redirect(route('ticket.show'));
    }
}
