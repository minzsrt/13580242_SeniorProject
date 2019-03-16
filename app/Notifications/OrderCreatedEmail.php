<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderCreatedEmail extends Notification
{
    use Queueable;
    private $employer;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($employer)
    {
        $this->employer = $employer;
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
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('คุณถูกจ้างงานโดย '.$this->employer->username)
            ->greeting('ยินดีด้วยคุณถูกจ้างงาน')
            ->line('กรุณาตรวจสอบข้อมูลในเว็บไซต์')
            ->action('เข้าสู่เว็บไซต์', url('/'));
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
