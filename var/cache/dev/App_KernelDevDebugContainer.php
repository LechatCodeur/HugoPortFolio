<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6IrE2YM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6IrE2YM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6IrE2YM.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6IrE2YM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container6IrE2YM\App_KernelDevDebugContainer([
    'container.build_hash' => '6IrE2YM',
    'container.build_id' => '977e88e2',
    'container.build_time' => 1744784097,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container6IrE2YM');
