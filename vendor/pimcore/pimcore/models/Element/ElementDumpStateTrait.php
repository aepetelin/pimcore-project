<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace Pimcore\Model\Element;

trait ElementDumpStateTrait
{
    /**
     * This needs to be equal to the value of ElementDumpStateInterface::DUMP_STATE_PROPERTY_NAME
     *
     * @var bool
     */
    protected $_fulldump = false;

    /**
     * @param bool $dumpState
     */
    public function setInDumpState(bool $dumpState)
    {
        $this->_fulldump = $dumpState;
    }

    /**
     * @return bool
     */
    public function isInDumpState(): bool
    {
        return $this->_fulldump;
    }
}
