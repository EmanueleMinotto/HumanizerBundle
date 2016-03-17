<?php

namespace EmanueleMinotto\HumanizerBundle\Twig;

use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\TranslatorInterface;
use Twig_Extension;

/**
 * Abstract Twig extension used to map humanizer static methods to Twig filters.
 *
 * @author Emanuele Minotto <minottoemanuele@gmail.com>
 */
abstract class AbstractHumanizerExtension extends Twig_Extension
{
    /**
     * Default locale.
     *
     * @var string
     */
    const DEFAULT_LOCALE = 'en';

    /**
     * Locale value used by php-humanizer.
     *
     * @var TranslatorInterface
     */
    protected $translator;

    /**
     * Constructor with optional translator.
     *
     * @param TranslatorInterface|null $translator
     */
    public function __construct(TranslatorInterface $translator = null)
    {
        $this->setTranslator(
            $translator ?: new Translator(self::DEFAULT_LOCALE)
        );
    }

    public function setTranslator(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }
}
