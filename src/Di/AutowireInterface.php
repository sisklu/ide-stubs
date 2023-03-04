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
interface AutowireInterface
{


    /**
     * @param DiInterface $container
     * @param string $className
     * @param array $parameters
     * @param array $autowireTypes
     * @return object
     */
    public function resolve(DiInterface $container, string $className, array $parameters = [], array $autowireTypes = []);

    /**
     * @param DiInterface $container
     * @param object $obj
     * @param string $method
     * @param array $parameters
     * @return mixed
     */
    public function resolveMethod(DiInterface $container, $obj, string $method, array $parameters = []);

    /**
     * @param string $className
     * @param mixed $definition
     * @param bool $isShared
     * @return AutowireInterface
     */
    public function bind(string $className, $definition, bool $isShared = false): AutowireInterface;

    /**
     * @param string $className
     * @param string $definition
     * @return bool
     */
    public function hasBind(string $className, string $definition = null): bool;

    /**
     * @param string $className
     * @param string $definition
     * @return BindDefinitionInterface|null
     */
    public function getBind(string $className, string $definition = null): ?BindDefinitionInterface;

    /**
     * @param array $binds
     * @param bool $replace
     * @return void
     */
    public function addBinds(array $binds, bool $replace = false): void;
}
