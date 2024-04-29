<?php

declare(strict_types=1);

namespace Qsomazzi\Component;

use Qsomazzi\Model\Notification;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('notificationsItem', template: '@Qsomazzi/components/notificationsItem.html.twig')]
final class NotificationsItem
{
    public Notification $notification;
}
