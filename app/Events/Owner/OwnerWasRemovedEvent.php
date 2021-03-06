<?php

/*
 * This file is part of Gitamin.
 *
 * Copyright (C) 2015-2016 The Gitamin Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gitamin\Events\Owner;

use Gitamin\Models\Owner;

class OwnerWasRemovedEvent implements OwnerEventInterface
{
    /**
     * The project owner that was removed.
     *
     * @var \Gitamin\Models\Owner
     */
    public $owner;

    /**
     * Create a new project owner was removed event instance.
     */
    public function __construct(Owner $owner)
    {
        $this->owner = $owner;
    }
}
