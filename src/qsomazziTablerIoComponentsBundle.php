<?php

declare(strict_types=1);

namespace Qsomazzi;

use Qsomazzi\DependencyInjection\qsomazziTablerIoComponentsExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class qsomazziTablerIoComponentsBundle extends AbstractBundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new qsomazziTablerIoComponentsExtension();
    }
}