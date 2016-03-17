<?php

namespace EmanueleMinotto\HumanizerBundle\DependencyInjection;

use EmanueleMinotto\HumanizerBundle\Twig;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;

/**
 * @covers EmanueleMinotto\HumanizerBundle\DependencyInjection\HumanizerExtension
 */
class HumanizerExtensionTest extends AbstractExtensionTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function getContainerExtensions()
    {
        return [
            new HumanizerExtension(),
        ];
    }


    /**
     * Test services definition.
     *
     * @param string $id
     * @param string $class
     *
     * @dataProvider servicesProvider
     */
    public function testServices($id, $class)
    {
        $this->load();

        $this->assertContainerBuilderHasService($id, $class);
        $this->assertContainerBuilderHasServiceDefinitionWithTag(
            $id,
            'twig.extension'
        );
    }

    /**
     * @return array
     */
    public function servicesProvider()
    {
        return [
            [
                'humanizer_bundle.twig.collection_humanizer_extension',
                Twig\CollectionHumanizerExtension::class
            ],
            [
                'humanizer_bundle.twig.datetime_humanizer_extension',
                Twig\DateTimeHumanizerExtension::class
            ],
            [
                'humanizer_bundle.twig.number_humanizer_extension',
                Twig\NumberHumanizerExtension::class
            ],
            [
                'humanizer_bundle.twig.string_humanizer_extension',
                Twig\StringHumanizerExtension::class
            ],
        ];
    }
}
