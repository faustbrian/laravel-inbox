<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Inbox.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Inbox\Events;

use Illuminate\Foundation\Events\Dispatchable;
use KodeKeep\Inbox\Contracts\Message;

class MessageCreated
{
    use Dispatchable;

    public Message $message;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }
}
