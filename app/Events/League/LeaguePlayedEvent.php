<?php

namespace App\Events\League;

use App\Services\League\ValueObjects\Uid;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use JetBrains\PhpStorm\Pure;

class LeaguePlayedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    #[Pure] public function __construct(private readonly Uid $uid)
    {
    }
}
