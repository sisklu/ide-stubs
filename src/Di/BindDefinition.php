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
class BindDefinition implements \Phalcon\Di\BindDefinitionInterface
{

    /**
     * @var string
     */
    protected $className;

    /**
     * @var string
     */
    protected $definition;

    /**
     * @var bind
     */
    protected $isShared;

    /**
     * @param string $className
     * @param string $definition
     * @param bool $isShared
     */
    public function __construct(string $className, string $definition, bool $isShared = false)
    {
    }

    /**
     * @return string
     */
    public function getClassName(): string
    {
    }

    /**
     * @return string
     */
    public function getDefinition(): string
    {
    }

    /**
     * @return bool
     */
    public function isShared(): bool
    {
    }

    /**
     * @param DiInterface $container
     * @return object
     */
    public function resolve(DiInterface $container)
    {
    }
}
