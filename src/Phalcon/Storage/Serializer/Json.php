<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Storage\Serializer;

use InvalidArgumentException;
use JsonSerializable;
use Phalcon\Helper\Json;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class Json extends \Phalcon\Storage\Serializer\AbstractSerializer
{

    /**
     * Serializes data
     *
     * @return string
     */
    public function serialize(): string
    {
    }

    /**
     * Unserializes data
     *
     * @param mixed $data
     * @return void
     */
    public function unserialize($data)
    {
    }

}
