<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVwr3L6C\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVwr3L6C/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVwr3L6C.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVwr3L6C\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerVwr3L6C\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Vwr3L6C',
    'container.build_id' => 'b2f0c9db',
    'container.build_time' => 1575378023,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVwr3L6C');
