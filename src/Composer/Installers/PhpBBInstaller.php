<?php
namespace Gonzunigad\Installers;

class PhpBBInstaller extends BaseInstaller
{
    protected $locations = array(
        'extension' => 'ext/{$vendor}/{$name}/',
        'language'  => 'language/{$name}/',
        'style'     => 'styles/{$name}/',
    );
}
