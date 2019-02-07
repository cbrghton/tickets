<?php

namespace App\Services;

use App\Models\Solicitud;
use App\Models\CatImagen;

class TicketService
{
    public function update(array $data)
    {
        $data = array_filter($data);

        Solicitud::find($data['id_ticket']);

        /*$ticket->incidencia = $ticket->incidencia . ' ' . $incidence_ticket;

        foreach ($images_ticket as $image_ticket) {
            $image = new CatImagen();

            $image_ticket = base64_encode($image_ticket);

            $image->imagen = $image_ticket;
            $image->solicitud_id = $id_ticket;

            $image->save();
        }

        return true;*/
    }
}
