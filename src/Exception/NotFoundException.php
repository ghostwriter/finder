<?php

declare(strict_types=1);

namespace Ghostwriter\Finder\Exception;

use Ghostwriter\Finder\Contract\FinderExceptionInterface;
use RuntimeException;

final class NotFoundException extends RuntimeException implements FinderExceptionInterface
{
}
