<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJtQyE7D\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJtQyE7D/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJtQyE7D.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJtQyE7D\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJtQyE7D\App_KernelDevDebugContainer([
    'container.build_hash' => 'JtQyE7D',
    'container.build_id' => 'fbd0f0d1',
    'container.build_time' => 1669720642,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJtQyE7D');
