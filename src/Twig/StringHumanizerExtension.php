<?php

namespace EmanueleMinotto\HumanizerBundle\Twig;

use Coduo\PHPHumanizer\StringHumanizer;
use Twig_SimpleFilter;

/**
 * Twig extension used to map StringHumanizer methods to Twig filters.
 *
 * @author Emanuele Minotto <minottoemanuele@gmail.com>
 */
class StringHumanizerExtension extends AbstractHumanizerExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new Twig_SimpleFilter(
                'humanize',
                [StringHumanizer::class, 'humanize']
            ),
            new Twig_SimpleFilter(
                'truncate',
                [StringHumanizer::class, 'truncate']
            ),
            new Twig_SimpleFilter(
                'truncate_html',
                [StringHumanizer::class, 'truncateHtml'],
                [
                    'is_safe' => [
                        'html',
                    ],
                ]
            ),
            new Twig_SimpleFilter(
                'remove_shortcodes',
                [StringHumanizer::class, 'removeShortcodes']
            ),
            new Twig_SimpleFilter(
                'remove_shortcode_tags',
                [StringHumanizer::class, 'removeShortcodeTags']
            ),
        ];
    }

    public function getName()
    {
        return 'humanizer_string';
    }
}
