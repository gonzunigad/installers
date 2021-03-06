<?php
namespace Gonzunigad\Installers;

class FuelInstaller extends BaseInstaller
{
    protected $locations = array(
        'module'  => 'fuel/app/modules/{$name}/',
        'package' => 'fuel/packages/{$name}/',
        'theme'   => 'fuel/themes/{$name}/',
    );
}
