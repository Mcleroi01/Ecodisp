<?php

namespace App\Notifications;

use RuntimeException;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SucessAdmission extends Notification
{
    use Queueable;

    private $admission;
    private $password;

    /**
     * Create a new notification instance.
     */
    public function __construct($admission,$password)
    {
        // Log des données d'admission
        Log::info('Données d\'admission dans la notification : ', $admission->toArray());

        $this->admission = $admission;

        $this->password = $password;
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
            ->greeting('Cher/Chère ' . $this-> admission->demandeur->prenom . ' ' . $this-> admission->demandeur->nom . ',')
            ->line('Nous avons le plaisir de vous informer que votre demande d\'admission à ' . $this-> admission->programme->nom . 'a été acceptée. Félicitations !')
            ->line('Nous sommes convaincus que vous apporterez une contribution précieuse à notre communauté académique et nous nous réjouissons de vous accueillir parmi nous.')
            ->line('Merci de votre intérêt pour notre institut.')
            ->line('Si vous avez des questions ou avez besoin de plus d\'informations, n\'hésitez pas à nous contacter à [Adresse email] ou par téléphone au [Numéro de téléphone].')
            ->line('Veuillez trouver ci-dessous vos informations d\'authentification pour accéder à votre compte étudiant :')
            ->line('Votre email est : '. $this-> admission->demandeur->email)
            ->line('Votre mot de passe est : '. $this->password)
            ->action('Connectez-vous', $url)
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
