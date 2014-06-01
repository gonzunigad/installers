<?php
namespace Gonzunigad\Installers;

class FreshworkInstaller extends BaseInstaller
{
    protected $locations = array(
        'plugin'      => 'plugin/{$name}/',
    );
}
