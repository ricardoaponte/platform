<?php

declare(strict_types=1);

namespace Orchid\Screen\Fields;

use Orchid\Screen\Field;

/**
 * Class Map.
 *
 * @method Map form($value = true)
 * @method Map formaction($value = true)
 * @method Map formenctype($value = true)
 * @method Map formmethod($value = true)
 * @method Map formnovalidate($value = true)
 * @method Map formtarget($value = true)
 * @method Map name(string $value = null)
 * @method Map value($value = true)
 * @method Map help(string $value = null)
 * @method Map popover(string $value = null)
 * @method Map zoom($value = true)
 * @method Map height($value = '300px')
 * @method Map title(string $value = null)
 */
class Map extends Field
{
    /**
     * @var string
     */
    protected $view = 'platform::fields.map';

    /**
     * Default attributes value.
     *
     * @var array
     */
    protected $attributes = [
        'zoom'   => 14,
        'height' => '300px',
    ];

    /**
     * Attributes available for a particular tag.
     *
     * @var array
     */
    protected $inlineAttributes = [
        'form',
        'formaction',
        'formenctype',
        'formmethod',
        'formnovalidate',
        'formtarget',
        'name',
        'placeholder',
        'readonly',
        'required',
        'value',
        'height',
    ];
}
