<?php

declare(strict_types=1);

namespace Ghostwriter\Finder\Tests\Unit;

use Ghostwriter\Finder\Foo;

/**
 * @coversDefaultClass \Ghostwriter\Finder\Foo
 *
 * @internal
 *
 * @small
 */
final class FooTest extends AbstractTestCase
{
    /** @covers ::test */
    public function test(): void
    {
        self::assertTrue((new Foo())->test());
    }
}
