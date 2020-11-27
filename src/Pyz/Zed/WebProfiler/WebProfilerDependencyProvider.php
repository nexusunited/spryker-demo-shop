<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\WebProfiler;

use Spryker\Zed\Config\Communication\Plugin\WebProfiler\WebProfilerConfigDataCollectorPlugin;
use Spryker\Zed\WebProfiler\Communication\Plugin\WebProfiler\WebProfilerAjaxDataCollectorPlugin;
use Spryker\Zed\WebProfiler\Communication\Plugin\WebProfiler\WebProfilerConfigDataCollectorPlugin as SymfonyWebProfilerConfigDataCollectorPlugin;
use Spryker\Zed\WebProfiler\Communication\Plugin\WebProfiler\WebProfilerEventsDataCollectorPlugin;
use Spryker\Zed\WebProfiler\Communication\Plugin\WebProfiler\WebProfilerExceptionDataCollectorPlugin;
use Spryker\Zed\WebProfiler\Communication\Plugin\WebProfiler\WebProfilerLoggerDataCollectorPlugin;
use Spryker\Zed\WebProfiler\Communication\Plugin\WebProfiler\WebProfilerMemoryDataCollectorPlugin;
use Spryker\Zed\WebProfiler\Communication\Plugin\WebProfiler\WebProfilerRequestDataCollectorPlugin;
use Spryker\Zed\WebProfiler\Communication\Plugin\WebProfiler\WebProfilerRouterDataCollectorPlugin;
use Spryker\Zed\WebProfiler\Communication\Plugin\WebProfiler\WebProfilerTimeDataCollectorPlugin;
use Spryker\Zed\WebProfiler\Communication\Plugin\WebProfiler\WebProfilerTwigDataCollectorPlugin;
use Spryker\Zed\WebProfiler\WebProfilerDependencyProvider as SprykerWebProfilerDependencyProvider;

class WebProfilerDependencyProvider extends SprykerWebProfilerDependencyProvider
{
    /**
     * @return \Spryker\Shared\WebProfilerExtension\Dependency\Plugin\WebProfilerDataCollectorPluginInterface[]
     */
    public function getDataCollectorPlugins(): array
    {
        return [
            new WebProfilerRequestDataCollectorPlugin(),
            new WebProfilerRouterDataCollectorPlugin(),
            new WebProfilerAjaxDataCollectorPlugin(),
            new SymfonyWebProfilerConfigDataCollectorPlugin(),
            new WebProfilerConfigDataCollectorPlugin(),
            new WebProfilerEventsDataCollectorPlugin(),
            new WebProfilerExceptionDataCollectorPlugin(),
            new WebProfilerLoggerDataCollectorPlugin(),
            new WebProfilerMemoryDataCollectorPlugin(),
            new WebProfilerTimeDataCollectorPlugin(),
            new WebProfilerTwigDataCollectorPlugin(),
        ];
    }
}
