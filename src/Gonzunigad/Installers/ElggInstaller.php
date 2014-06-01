<?php
namespace Gonzunigad\Installers;

class ElggInstaller extends BaseInstaller
{
    protected $locations = array(
        'plugin' => 'mod/{$name}/',
    );
}
