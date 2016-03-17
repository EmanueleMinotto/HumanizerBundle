<?php

namespace EmanueleMinotto\HumanizerBundle\Twig;

use Coduo\PHPHumanizer\CollectionHumanizer;
use Twig_SimpleFilter;

/**
 * Twig extension used to map CollectionHumanizer methods to Twig filters.
 *
 * @author Emanuele Minotto <minottoemanuele@gmail.com>
 */
class CollectionHumanizerExtension extends AbstractHumanizerExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new Twig_SimpleFilter(
                'oxford',
                function ($collection, $limit = null) {
                    return CollectionHumanizer::oxford(
                        $collection,
                        $limit,
                        $this->translator->getLocale()
                    );
                }
            ),
        ];
    }

    public function getName()
    {
        return 'humanizer_collection';
    }
}
