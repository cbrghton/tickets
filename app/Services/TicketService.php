<?php

namespace App\Services;

use App\Models\CatImagen;
use App\Models\Solicitud;
use Illuminate\Support\Facades\Auth;

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

    public function insert(array $data)
    {
        $ticket = Solicitud::create([
            'incidencia' => $data['incidencia'],
            'sistema_id' => $data['sistema_id'],
            'user_creacion_id' => Auth::id(),
        ]);

        foreach ($data['imagenes'] as $image_ticket) {
             $image = new CatImagen();

            $image_ticket = base64_encode(file_get_contents($image_ticket));

            $image->imagen = $image_ticket;
            $image->solicitud_id = $ticket->id_solicitud;

            $image->save();
        }
    }
}
