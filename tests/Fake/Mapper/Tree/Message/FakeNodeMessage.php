<?php

declare(strict_types=1);

namespace CuyZ\Valinor\Tests\Fake\Mapper\Tree\Message;

use CuyZ\Valinor\Mapper\Tree\Message\Message;
use CuyZ\Valinor\Mapper\Tree\Message\NodeMessage;
use CuyZ\Valinor\Tests\Fake\Mapper\FakeShell;

final class FakeNodeMessage
{
    public static function any(): NodeMessage
    {
        return self::with(new FakeMessage());
    }

    public static function with(Message $message): NodeMessage
    {
        return new NodeMessage(FakeShell::any(), $message);
    }
}
