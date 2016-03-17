<?php

namespace EmanueleMinotto\HumanizerBundle\Twig;

use Coduo\PHPHumanizer\DateTimeHumanizer;
use DateTime;
use Twig_SimpleFilter;

/**
 * Twig extension used to map DateTimeHumanizer methods to Twig filters.
 *
 * @author Emanuele Minotto <minottoemanuele@gmail.com>
 */
class DateTimeHumanizerExtension extends AbstractHumanizerExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new Twig_SimpleFilter(
                'difference',
                function (DateTime $fromDate, DateTime $toDate) {
                    return DateTimeHumanizer::difference(
                        $fromDate,
                        $toDate,
                        $this->translator->getLocale()
                    );
                }
            ),
            new Twig_SimpleFilter(
                'precise_difference',
                function (DateTime $fromDate, DateTime $toDate) {
                    return DateTimeHumanizer::preciseDifference(
                        $fromDate,
                        $toDate,
                        $this->translator->getLocale()
                    );
                }
            ),
        ];
    }

    public function getName()
    {
        return 'humanizer_datetime';
    }
}
