<?php

namespace EmanueleMinotto\HumanizerBundle\DependencyInjection;

use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionConfigurationTestCase;

/**
 * @covers EmanueleMinotto\HumanizerBundle\DependencyInjection\Configuration
 */
class ConfigurationTest extends AbstractExtensionConfigurationTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function getContainerExtension()
    {
        return new HumanizerExtension();
    }

    /**
     * {@inheritdoc}
     */
    protected function getConfiguration()
    {
        return new Configuration();
    }

    /**
     * Test configuration formats.
     */
    public function testConfigurationFormats()
    {
        $this->assertProcessedConfigurationEquals(
            [
                'translator' => 'translator',
            ],
            [
                __DIR__.'/Fixtures/config.yml',
                __DIR__.'/Fixtures/config.xml',
            ]
        );
    }
}
