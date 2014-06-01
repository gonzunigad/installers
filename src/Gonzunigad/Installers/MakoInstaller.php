<?php
namespace Gonzunigad\Installers;

class MakoInstaller extends BaseInstaller
{
    protected $locations = array(
        'package' => 'app/packages/{$name}/',
    );
}
