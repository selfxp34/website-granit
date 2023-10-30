<?php

namespace App\Notifications;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class InboxMessage extends Notification
{
    use Queueable;

    protected $message;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(ContactFormRequest $message)
    {
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable)
    {
        $mail = (new MailMessage)
            ->subject(config('admin.name') . ", новое сообщение с сайта granitvolga")
            ->greeting(" ")
            ->salutation(" ")
            ->from(config('admin.email'), 'no-reply')
            ->line('Имя: ' . $this->message->name)
            ->line('E-mail: ' . $this->message->email)
            ->line('Сообщение: ')
            ->line($this->message->message);
        return $mail;
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }


}
