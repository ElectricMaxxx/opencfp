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

namespace OpenCFP\Test\Unit\Http\Action;

use Localheinz\Test\Util\Helper;
use OpenCFP\Domain\Services;
use PHPUnit\Framework;
use Symfony\Component\HttpFoundation;
use Symfony\Component\Routing;

abstract class AbstractActionTestCase extends Framework\TestCase
{
    use Helper;

    /**
     * @return Framework\MockObject\MockObject|HttpFoundation\Request
     */
    final protected function createRequestMock(): HttpFoundation\Request
    {
        return $this->createMock(HttpFoundation\Request::class);
    }

    /**
     * @return Framework\MockObject\MockObject|HttpFoundation\Session\SessionInterface
     */
    final protected function createSessionMock(): HttpFoundation\Session\SessionInterface
    {
        return $this->createMock(HttpFoundation\Session\SessionInterface::class);
    }

    /**
     * @return Framework\MockObject\MockObject|Routing\Generator\UrlGeneratorInterface
     */
    final protected function createUrlGeneratorMock(): Routing\Generator\UrlGeneratorInterface
    {
        return $this->createMock(Routing\Generator\UrlGeneratorInterface::class);
    }

    /**
     * @return Framework\MockObject\MockObject|Services\Authentication
     */
    final protected function createAuthenticationMock(): Services\Authentication
    {
        return $this->createMock(Services\Authentication::class);
    }
}
