<?php
namespace Gonzunigad\Installers;

class KohanaInstaller extends BaseInstaller
{
    protected $locations = array(
        'module' => 'modules/{$name}/',
    );
}
