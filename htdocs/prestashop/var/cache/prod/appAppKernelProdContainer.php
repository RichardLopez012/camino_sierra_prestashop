<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPWPMF5D\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPWPMF5D/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerPWPMF5D.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerPWPMF5D\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerPWPMF5D\appAppKernelProdContainer([
    'container.build_hash' => 'PWPMF5D',
    'container.build_id' => '7353c3f2',
    'container.build_time' => 1728892173,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPWPMF5D');
