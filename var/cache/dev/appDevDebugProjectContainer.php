<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKjggepx\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKjggepx/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerKjggepx.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerKjggepx\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerKjggepx\appDevDebugProjectContainer([
    'container.build_hash' => 'Kjggepx',
    'container.build_id' => '06bac378',
    'container.build_time' => 1595428872,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKjggepx');
