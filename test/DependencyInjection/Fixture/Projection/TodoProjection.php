<?php

declare(strict_types=1);
namespace ProophTest\Bundle\EventStore\DependencyInjection\Fixture\Projection;

use Prooph\Bundle\EventStore\Projection\ReadModelProjection;
use Prooph\EventStore\Projection\ReadModelProjector;

final class TodoProjection implements ReadModelProjection
{
    public function project(ReadModelProjector $projector): ReadModelProjector
    {
    }
}
