<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Di;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
interface BindDefinitionInterface
{


    /**
     * Returns class name
     *
     * @return string
     */
    public function getClassName(): string;

    /**
     * Returns definition
     *
     * @return string
     */
    public function getDefinition(): string;

    /**
     * @return bool
     */
    public function isShared(): bool;

    /**
     * @param DiInterface $container
     * @return object
     */
    public function resolve(DiInterface $container);
}
