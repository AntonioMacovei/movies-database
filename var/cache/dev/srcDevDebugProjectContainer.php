<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBio6mZT\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBio6mZT/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerBio6mZT.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerBio6mZT\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerBio6mZT\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Bio6mZT',
    'container.build_id' => '35f47238',
    'container.build_time' => 1532560248,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerBio6mZT');