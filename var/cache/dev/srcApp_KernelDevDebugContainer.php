<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNsybyVo\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNsybyVo/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNsybyVo.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNsybyVo\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerNsybyVo\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'NsybyVo',
    'container.build_id' => 'a697fc23',
    'container.build_time' => 1617895915,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNsybyVo');
