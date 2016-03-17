<?php

namespace EmanueleMinotto\HumanizerBundle\Twig;

use Twig_Test_IntegrationTestCase;

/**
 * Testing included Twig extensions.
 *
 * @author Emanuele Minotto <minottoemanuele@gmail.com>
 *
 * @covers EmanueleMinotto\HumanizerBundle\Twig\AbstractHumanizerExtension
 * @covers EmanueleMinotto\HumanizerBundle\Twig\CollectionHumanizerExtension
 * @covers EmanueleMinotto\HumanizerBundle\Twig\DateTimeHumanizerExtension
 * @covers EmanueleMinotto\HumanizerBundle\Twig\NumberHumanizerExtension
 * @covers EmanueleMinotto\HumanizerBundle\Twig\StringHumanizerExtension
 */
class HumanizerExtensionTest extends Twig_Test_IntegrationTestCase
{
    /**
     * {@inheritdoc}
     */
    public function getExtensions()
    {
        return [
            new CollectionHumanizerExtension(),
            new DateTimeHumanizerExtension(),
            new NumberHumanizerExtension(),
            new StringHumanizerExtension(),
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function getFixturesDir()
    {
        return __DIR__.'/Fixtures';
    }
}
