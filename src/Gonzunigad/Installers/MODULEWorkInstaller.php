<?php
namespace Gonzunigad\Installers;

class MODULEWorkInstaller extends BaseInstaller
{
    protected $locations = array(
        'module'    => 'modules/{$name}/',
    );
}
