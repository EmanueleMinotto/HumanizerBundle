<?php

namespace EmanueleMinotto\HumanizerBundle\Twig;

use Coduo\PHPHumanizer\NumberHumanizer;
use Twig_SimpleFilter;

/**
 * Twig extension used to map NumberHumanizer methods to Twig filters.
 *
 * @author Emanuele Minotto <minottoemanuele@gmail.com>
 */
class NumberHumanizerExtension extends AbstractHumanizerExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new Twig_SimpleFilter(
                'ordinalize',
                function ($number) {
                    return NumberHumanizer::ordinalize(
                        $number,
                        $this->translator->getLocale()
                    );
                }
            ),
            new Twig_SimpleFilter('ordinal', function ($number) {
                return NumberHumanizer::ordinal(
                    $number,
                    $this->translator->getLocale()
                );
            }),
            new Twig_SimpleFilter(
                'binary_suffix',
                function ($number) {
                    return NumberHumanizer::binarySuffix(
                        $number,
                        $this->translator->getLocale()
                    );
                }
            ),
            new Twig_SimpleFilter(
                'precise_binary_suffix',
                function ($number, $precision) {
                    return NumberHumanizer::preciseBinarySuffix(
                        $number,
                        $precision,
                        $this->translator->getLocale()
                    );
                }
            ),
            new Twig_SimpleFilter(
                'metric_suffix',
                function ($number) {
                    return NumberHumanizer::metricSuffix(
                        $number,
                        $this->translator->getLocale()
                    );
                }
            ),
            new Twig_SimpleFilter(
                'to_roman',
                [NumberHumanizer::class, 'toRoman']
            ),
            new Twig_SimpleFilter(
                'from_roman',
                [NumberHumanizer::class, 'fromRoman']
            ),
        ];
    }

    public function getName()
    {
        return 'humanizer_number';
    }
}
