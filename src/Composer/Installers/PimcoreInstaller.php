<?php
namespace Gonzunigad\Installers;

class PimcoreInstaller extends BaseInstaller
{
    protected $locations = array(
        'plugin' => 'plugins/{$name}/',
    );
}
