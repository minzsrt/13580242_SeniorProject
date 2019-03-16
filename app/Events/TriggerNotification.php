<?php

namespace App\Events;

use App\Notification;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TriggerNotification implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $userID;
    public $notification_count;

    public function __construct($userID)
    {
        $this->userID = $userID;
        $this->notification_count = Notification::where('user_id', $this->userID)
            ->where('status', 0)->count();
    }

    public function broadcastOn()
    {
        return new PrivateChannel('user.'.$this->userID);
    }
}
