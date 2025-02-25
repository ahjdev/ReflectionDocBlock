<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use Doctrine\Deprecations\Deprecation;
use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\Tags\TagWithType;

/**
 * Reflection class for a {@}extends tag in a Docblock.
 */
class Extends_ extends TagWithType 
{
    public function __construct(Type $type, ?Description $description = null)
    {
        $this->name        = 'extends';
        $this->type        = $type;
        $this->description = $description;
    }

    /**
     * @deprecated Create using static factory is deprecated,
     *  this method should not be called directly by library consumers
     */
    public static function create(string $body)
    {
        Deprecation::trigger(
            'phpdocumentor/reflection-docblock',
            'https://github.com/phpDocumentor/ReflectionDocBlock/issues/361',
            'Create using static factory is deprecated, this method should not be called directly
             by library consumers',
        );
        return null;
    }
}
