<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Di;

use Phalcon\Di\Exception\AutowireException;
use Phalcon\Di\AutowireTypesProviderInterface;
use Phalcon\Di\Exception\BindException;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class Autowire implements \Phalcon\Di\AutowireInterface
{

    /**
     * @var bool
     */
    protected $useShared;

    /**
     * @var array
     */
    protected $localCache = [];

    /**
     * @var int
     */
    protected $maxKeyLength = 250;

    /**
     * @var bool
     */
    protected $bindClassInterfaces;

    /**
     * @var array
     */
    protected $binds = [];

    /**
     * @param array $binds
     */
    public function setBinds(array $binds)
    {
    }

    /**
     * @return array
     */
    public function getBinds(): array
    {
    }

    /**
     * @param array $binds
     * @param bool $bindClassInterfaces
     * @param bool $useShared
     */
    public function __construct(array $binds = [], bool $bindClassInterfaces = false, bool $useShared = false)
    {
    }

    /**
     * @param DiInterface $container
     * @param object $obj
     * @param string $method
     * @param array $parameters
     * @return mixed
     */
    public function resolveMethod(DiInterface $container, $obj, string $method, array $parameters = [])
    {
    }

    /**
     * @param DiInterface $container
     * @param string $className
     * @param array $parameters
     * @param array $autowireTypes
     * @return object
     */
    public function resolve(DiInterface $container, string $className, array $parameters = [], array $autowireTypes = [])
    {
    }

    /**
     * @param object $obj
     * @param string $method
     * @return array
     */
    protected function resolveMethodParamters($obj, string $method): array
    {
    }

    /**
     * @param string $key
     * @return array|null
     */
    protected function fetchParamsFromCache(string $key): ?array
    {
    }

    /**
     * @param string $className
     * @return array
     */
    protected function resolveConstructorParameters(string $className): array
    {
    }

    /**
     * @param array $reflectionParameters
     * @param string $keyCache
     * @return array
     */
    protected function resolveReflectionParamters(array $reflectionParameters, string $keyCache): array
    {
    }

    /**
     * @param DiInterface $container
     * @param array $methodParameters
     * @param array $parameters
     * @param array $autowireTypes
     * @return array
     */
    protected function prepareCallParameters(DiInterface $container, array $methodParameters, array $parameters, array $autowireTypes = []): array
    {
    }

    /**
     * @param string $className
     * @param mixed $definition
     * @param bool $isShared
     * @return AutowireInterface
     */
    public function bind(string $className, $definition, bool $isShared = false): AutowireInterface
    {
    }

    /**
     * @param string $className
     * @param string $definition
     * @return bool
     */
    public function hasBind(string $className, string $definition = null): bool
    {
    }

    /**
     * @param string $className
     * @param string $definition
     * @return BindDefinitionInterface|null
     */
    public function getBind(string $className, string $definition = null): ?BindDefinitionInterface
    {
    }

    /**
     * @param array $binds
     * @param bool $replace
     * @return void
     */
    public function addBinds(array $binds, bool $replace = false): void
    {
    }
}
