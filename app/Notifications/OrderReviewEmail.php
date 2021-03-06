<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class OrderReviewEmail extends Notification
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
        ->subject('ผู้ว่าจ้าง '.$this->employer->username.' ได้รีวิวให้คุณ')
        ->greeting('ผู้ว่าจ้าง '.$this->employer->username.' ได้รีวิวให้คุณ')
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
