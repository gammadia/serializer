<?php

use JMS\Serializer\Metadata\ClassMetadata;

$metadata = new ClassMetadata(\JMS\Serializer\Tests\Fixtures\AuthorReadOnly::class);

return $metadata;
