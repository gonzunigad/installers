<?php
namespace Gonzunigad\Installers;

class LithiumInstaller extends BaseInstaller
{
    protected $locations = array(
        'library' => 'libraries/{$name}/',
        'source'  => 'libraries/_source/{$name}/',
    );
}
