<?php
namespace Gonzunigad\Installers;

class OxidInstaller extends BaseInstaller
{
    protected $locations = array(
        'module'    => 'modules/{$name}/',
        'theme'  => 'application/views/{$name}/',
        'out'    => 'out/{$name}/',
    );
}
