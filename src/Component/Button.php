<?php

declare(strict_types=1);

namespace Qsomazzi\Component;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('button')]
final class Button
{
    public string $type = 'default';

    public function getTypeClasses(): string
    {
        return match ($this->type) {
            'default' => '',
            'primary' => 'btn-primary',
            'success' => 'btn-success',
            'warning' => 'btn-warning',
            'danger'  => 'btn-danger',
            default   => throw new \LogicException(sprintf('Unknown button type "%s"', $this->type)),
        };
    }
}
