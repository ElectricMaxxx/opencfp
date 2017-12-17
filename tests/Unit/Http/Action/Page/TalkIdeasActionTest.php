<?php

declare(strict_types=1);

/**
 * Copyright (c) 2013-2017 OpenCFP
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/opencfp/opencfp
 */

namespace OpenCFP\Test\Unit\Http\Action\Page;

use OpenCFP\Http\Action\Page\TalkIdeasAction;
use PHPUnit\Framework\TestCase;

final class TalkIdeasActionTest extends TestCase
{
    public function testAction()
    {
        $action = new TalkIdeasAction();

        $this->assertSame([], $action());
    }
}
