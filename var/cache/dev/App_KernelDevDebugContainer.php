<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLxpxbg2\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLxpxbg2/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLxpxbg2.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLxpxbg2\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLxpxbg2\App_KernelDevDebugContainer([
    'container.build_hash' => 'Lxpxbg2',
    'container.build_id' => 'fdfce4f4',
    'container.build_time' => 1606641225,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLxpxbg2');
