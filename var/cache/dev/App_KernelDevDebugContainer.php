<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJy5p6IG\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJy5p6IG/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJy5p6IG.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJy5p6IG\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJy5p6IG\App_KernelDevDebugContainer([
    'container.build_hash' => 'Jy5p6IG',
    'container.build_id' => '1e6d6dec',
    'container.build_time' => 1642446367,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJy5p6IG');
