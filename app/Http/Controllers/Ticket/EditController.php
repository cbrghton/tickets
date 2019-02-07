<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Services\TicketService;
use App\Services\VerifyService;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function update(Request $request, TicketService $ticketService, VerifyService $verify)
    {
        if ($verify->verifyEmpty($request->all())) {
            return back();
        }

        $validation = $request->validate([
            'id_ticket' => 'required',
            'incidencia' => 'nullable|string',
            'imagenes.*' => 'nullable|image|max:1000',
            'sistema_id' => 'nullable|alpha'
        ]);

        $ticketService->update($request->all());
    }
}
