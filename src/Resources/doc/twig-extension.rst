Twig Extension
==============

The main goal of this bundle is to provide the `coduo/php-humanizer`_ utilities
in Twig templates with a shared translator service (see the `Configuration Reference`_).

This is done providing the following filters (with related original method):

- ``binary_suffix``: NumberHumanizer::binarySuffix
- ``difference``: DateTimeHumanizer::difference
- ``from_roman``: NumberHumanizer::fromRoman
- ``humanize``: StringHumanizer::humanize
- ``metric_suffix``: NumberHumanizer::metricSuffix
- ``ordinal``: NumberHumanizer::ordinal
- ``ordinalize``: NumberHumanizer::ordinalize
- ``oxford``: CollectionHumanizer::oxford
- ``precise_binary_suffix``: NumberHumanizer::preciseBinarySuffix
- ``precise_difference``: DateTimeHumanizer::preciseDifference
- ``remove_shortcode_tags``: StringHumanizer::removeShortcodeTags (requires `thunderer/shortcode`_)
- ``remove_shortcodes``: StringHumanizer::removeShortcodes (requires `thunderer/shortcode`_)
- ``to_roman``: NumberHumanizer::toRoman
- ``truncate_html``: StringHumanizer::truncate_html (this filter is HTML safe)
- ``truncate``: StringHumanizer::truncate

.. _`Configuration Reference`: https://github.com/EmanueleMinotto/HumanizerBundle/tree/master/src/Resources/doc/configuration-reference.rst
.. _`coduo/php-humanizer`: https://github.com/coduo/php-humanizer
.. _`thunderer/shortcode`: https://github.com/thunderer/Shortcode
