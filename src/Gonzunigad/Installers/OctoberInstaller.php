<?php
namespace Gonzunigad\Installers;

class OctoberInstaller extends BaseInstaller
{
    protected $locations = array(
        'module'    => 'modules/{$name}/',
        'plugin'    => 'plugins/{$vendor}/{$name}/',
    );
}
