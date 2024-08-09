<?php

namespace App\Notifications;

use RuntimeException;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class AdmissionCreated extends Notification
{
    use Queueable;

    private $admission;

    public function __construct($admission)
    {
        // Log des données d'admission
        Log::info('Données d\'admission dans la notification : ', $admission->toArray());

        $this->admission = $admission;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
      
        if (!$this->admission) {
            throw new RuntimeException('Les données d\'admission ne sont pas disponibles.');
        }

        // Log des données utilisées dans l'email
        Log::info('Préparation de l\'email pour : ' . $this->admission->email);

        $url=url('https://iridescent-syrniki-e0919f.netlify.app/');

        return (new MailMessage)
            ->subject('confirmation de la demander d\admission')
            ->greeting('Bonjour ' . $this->admission->prenom . ' ' . $this->admission->nom . ',')
            ->line('Votre demande d\'admission a été soumise avec succès.')
            ->line('Nous vous contacterons bientôt avec plus de détails.')
            ->line('Merci de votre intérêt pour notre institut.')
            ->action('Voir votre status d\'admission' ,$url)
            ->salutation('Cordialement, L\'équipe d\'admission');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
