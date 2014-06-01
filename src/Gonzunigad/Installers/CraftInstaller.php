<?php
namespace Gonzunigad\Installers;

class CraftInstaller extends BaseInstaller
{
    protected $locations = array(
        'plugin' => 'craft/plugins/{$name}/',
    );
}
