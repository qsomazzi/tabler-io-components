<?php

declare(strict_types=1);

namespace Qsomazzi\Model;

final class Notification
{
    public function __construct(
        public string $title,
        public string $description = '',
        public string $link = '',
        public string $color = ''
    ) {
    }
}