<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Transfer;

use Spryker\Zed\Transfer\TransferConfig as SprykerTransferConfig;

class TransferConfig extends SprykerTransferConfig
{
    /**
     * @return array
     */
    public function getEntitiesSourceDirectories()
    {
        return [
            APPLICATION_SOURCE_DIR . '/Orm/Propel/*/Schema/',
        ];
    }

    /**
     * We use strict name validation for core internal usage and enable this by default for all
     * new projects.
     *
     * @return bool
     */
    public function isTransferNameValidated(): bool
    {
        return true;
    }

    /**
     * We use strict validation for case sensitive declaration for all new projects.
     *
     * @return bool
     */
    public function isCaseValidated(): bool
    {
        return true;
    }

    /**
     * We use strict validation for collections and singular definition for all new projects.
     *
     * @return bool
     */
    public function isSingularRequired(): bool
    {
        return false;
    }
}
