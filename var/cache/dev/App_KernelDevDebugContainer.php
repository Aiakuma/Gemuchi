<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7CIJtIz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7CIJtIz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7CIJtIz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7CIJtIz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7CIJtIz\App_KernelDevDebugContainer([
    'container.build_hash' => '7CIJtIz',
    'container.build_id' => '78c57b59',
    'container.build_time' => 1642971956,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7CIJtIz');
