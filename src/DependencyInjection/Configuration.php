<?php

namespace EmanueleMinotto\HumanizerBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * {@inheritdoc}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('humanizer');

        $rootNode
            ->children()
                ->scalarNode('translator')
                    ->defaultValue('translator')
                    ->info('Default translator service id to use')
                ->end()
            ->end();

        return $treeBuilder;
    }
}
