<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-touch')
    ->setSourceDir('public')
    ->usePackage('larakit/sf-angular')
    ->ngModule('ngTouch')
    ->jsPackage('angular-touch.min.js');
