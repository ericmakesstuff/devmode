<?php

namespace App\Events;

use App\Events\Event;
use App\StatusLog;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class StatusLevelUpdated extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $log;

    /**
     * Create a new event instance.
     */
    public function __construct(StatusLog $log)
    {
        $this->log = $log;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['status'];
    }
}
