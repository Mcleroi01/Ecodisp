<?php

namespace App\Notifications;

use RuntimeException;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class FailAdmission extends Notification
{
    use Queueable;

    private $admission;


    /**
     * Create a new notification instance.
     */
    public function __construct($admission)
    {
        // Log des données d'admission
        Log::info('Données d\'admission dans la notification : ', $admission->toArray());

        $this->admission = $admission;


    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        if (!$this->admission) {
            throw new RuntimeException('Les données d\'admission ne sont pas disponibles.');
        }

        // Log des données utilisées dans l'email
        Log::info('Préparation de l\'email pour : ' . $this->admission->email);

        $url = url('https://iridescent-syrniki-e0919f.netlify.app/');

        return (new MailMessage)
            ->subject('Félicitations ! Votre demande d\'admission est acceptée')
            ->greeting('Cher/Chère ' . $this->admission->demandeur->prenom . ' ' . $this->admission->demandeur->nom . ',')
            ->line('Nous vous remercions pour l\'intérêt que vous avez porté à notre établissement et pour avoir soumis votre demande d\'admission.')
            ->line('Après une revue approfondie de votre dossier, nous regrettons de vous informer que nous ne pouvons pas accepter votre demande d\'admission cette année. Cette décision est le résultat de nombreux facteurs et ne remet pas en question vos compétences et votre potentiel.')
            ->line('Nous vous encourageons à ne pas vous décourager et à continuer à poursuivre vos objectifs académiques et professionnels. Vous pouvez également postuler à nouveau lors des prochaines sessions d\'admission.')
            ->line('Si vous avez des questions ou avez besoin de plus d\'informations, n\'hésitez pas à nous contacter à [Adresse email] ou par téléphone au [Numéro de téléphone].')
            ->line('Nous vous souhaitons beaucoup de succès dans vos projets futurs et restons disponibles si vous avez des questions supplémentaires ou si vous avez besoin de conseils pour d\'autres opportunités.')
            ->salutation('Cordialement, L\'équipe d\'admission');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
