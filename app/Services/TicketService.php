<?php

namespace App\Services;

use App\Models\CatImagen;
use App\Models\Solicitud;

class TicketService
{
    public function update(array $data)
    {
        $data = array_filter($data);

        Solicitud::find($data['id_solicitud'])
            ->update($data);

        if (array_key_exists('imagenes', $data)) {

            foreach ($data['imagenes'] as $image_ticket) {
                $image = new CatImagen();

                $image_ticket = base64_encode($image_ticket);

                $image->imagen = $image_ticket;
                $image->solicitud_id = $data['id_solicitud'];

                $image->save();
            }
        }
    }
}
