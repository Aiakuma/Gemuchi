<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5dbB4C0\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5dbB4C0/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5dbB4C0.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container5dbB4C0\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container5dbB4C0\App_KernelDevDebugContainer([
    'container.build_hash' => '5dbB4C0',
    'container.build_id' => '03b74565',
    'container.build_time' => 1643155862,
], __DIR__.\DIRECTORY_SEPARATOR.'Container5dbB4C0');
