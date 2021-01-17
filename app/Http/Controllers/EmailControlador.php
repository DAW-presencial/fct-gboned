<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailControlador extends Controller
{
    function enviarEmail() {
        // El nombre del destinatario
        $to_name = 'Garbiñe';
        // El correo al cual se envía el mensaje 
        $to_email = 'garibiza@gmail.com';
        // Pasarle la información que se enviará dentro del mensaje
        $data = array('name' => "Garbiñe Boned", "body" => "Un Email de Prueba");

        // Coge lo que hay dentro de la vista resources/views/emails/mail.blade.php, le añade la información de dataa
        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
            // Indicar receptor y emisor del mensaje
            $message->to($to_email, $to_name)->subject('Test de Email Laravel');
            $message->from('gboned@cifpfbmoll.eu', 'Test de Email');
        });
}
}
