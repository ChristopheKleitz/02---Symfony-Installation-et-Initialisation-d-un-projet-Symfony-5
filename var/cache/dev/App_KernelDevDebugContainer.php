<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKWT0RBI\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKWT0RBI/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKWT0RBI.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKWT0RBI\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKWT0RBI\App_KernelDevDebugContainer([
    'container.build_hash' => 'KWT0RBI',
    'container.build_id' => '97606511',
    'container.build_time' => 1611398078,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKWT0RBI');
