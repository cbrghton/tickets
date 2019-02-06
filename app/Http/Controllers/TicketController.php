<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TicketService;

class TicketController extends Controller
{
    public function edit(Request $request, TicketService $ticketService)
    {

        if (empty($request->input('incidence')) &&
            empty($request->file('images')) &&
            empty($request->input('system'))) {
            return back();
        }

        $validation = $request->validate([
            'incidence' => 'nullable|string',
            'images.*' => 'nullable|image|max:1000',
            'system' => 'nullable|alpha'
        ]);

        dd($request->file());

        //$id_ticket = $request->input('id');
        $incidence_ticket = $request->input('incidence');
        $images_ticket = $request->file('images');
        $id_system = $request->input('system');

        $ticketService->edit(1, $incidence_ticket, $images_ticket, $id_system);
    }
}
