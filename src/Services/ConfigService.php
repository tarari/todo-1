<?php 
namespace App\Services;

use Dotenv\Dotenv;

class ConfigService
{
    protected $config;

    public function __construct()
    {
        $root= dirname(__DIR__, 2);
        $dotenv = Dotenv::createImmutable($root);
        $dotenv->load();
        $this->config = $_ENV;
        
    }

    public function get(string $key, $default = null)
    {
        return $this->config[$key] ?? $default;
    }
}
