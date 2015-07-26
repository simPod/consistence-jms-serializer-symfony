<?php

namespace Consistence\JmsSerializer\SymfonyBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class ConsistenceJmsSerializerExtension extends \Symfony\Component\HttpKernel\DependencyInjection\Extension
{

	const ALIAS = 'consistence_jms_serializer';

	/**
	 * @param mixed[][] $configs
	 * @param \Symfony\Component\DependencyInjection\ContainerBuilder $container
	 */
	public function load(array $configs, ContainerBuilder $container)
	{
		$loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/config'));
		$loader->load('services.yml');
	}

	/**
	 * @return string
	 */
	public function getAlias()
	{
		return self::ALIAS;
	}

}