<?php
/*
 * This file is a part of "furqansiddiqui/ecdsa-php" package.
 * https://github.com/furqansiddiqui/ecdsa-php
 *
 * Copyright (c) Furqan A. Siddiqui <hello@furqansiddiqui.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code or visit following link:
 * https://github.com/furqansiddiqui/bip32-keypair-php/blob/master/LICENSE
 */

declare(strict_types=1);

namespace FurqanSiddiqui\BIP32\Buffers;

use Comely\Buffer\AbstractFixedLenBuffer;

/**
 * Class Bits512
 * @package FurqanSiddiqui\BIP32\Buffers
 */
class Bits512 extends AbstractFixedLenBuffer
{
    /** @var int */
    protected const SIZE = 64;
    /** @var bool */
    protected bool $readOnly = true;
}
