<?php

/*
 * This file is part of the Awurth Validator package.
 *
 * (c) Alexis Wurth <awurth.dev@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Awurth\Validator;

/**
 * Handles the creation of a validation failure collection.
 *
 * @author Alexis Wurth <awurth.dev@gmail.com>
 */
interface ValidationFailureCollectionFactoryInterface
{
    /**
     * Creates a new validation failure collection.
     *
     * @param ValidationFailureInterface[] $failures
     */
    public function create(iterable $failures = []): ValidationFailureCollectionInterface;
}
