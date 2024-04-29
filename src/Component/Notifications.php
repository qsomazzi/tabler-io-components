<?php

declare(strict_types=1);

namespace Qsomazzi\Component;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('notifications', template: '@Qsomazzi/components/notifications.html.twig')]
final class Notifications
{
    public function __construct(private readonly RequestStack $requestStack)
    {
    }

    public function notifications(): array
    {
        return $this->requestStack->getSession()->get('notifications', []);
    }
}
