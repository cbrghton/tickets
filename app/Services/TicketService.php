<?php

namespace App\Services;

use App\Models\Solicitud;
use App\Models\CatImagen;

class TicketService
{
    public function edit($id_ticket, $incidence_ticket, $images_ticket, $id_system)
    {
        $ticket = Solicitud::findOrFail($id_ticket);

        $ticket->incidencia = $ticket->incidencia . ' ' . $incidence_ticket;

        $ticket->sistema_id = $id_system;

        foreach ($images_ticket as $image_ticket) {
            $image = new CatImagen();

            $image_ticket = base64_encode($image_ticket);

            $image->imagen = $image_ticket;
            $image->solicitud_id = $id_ticket;

            $image->save();
        }

        return true;
    }
}
