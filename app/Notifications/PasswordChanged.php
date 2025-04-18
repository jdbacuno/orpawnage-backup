<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PasswordChanged extends Notification implements ShouldQueue
{
    use Queueable;

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Your Password Has Been Changed')
            ->line('Your account password was recently changed.')
            ->line('If you did not make this change, please secure your account immediately.')
            ->action('Secure Your Account', url('/password/reset'))
            ->line('Thank you for using our application!');
    }
}
