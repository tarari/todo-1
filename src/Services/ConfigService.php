<?php 
namespace App\Services;

use Dotenv\Dotenv;

class ConfigService
{
    protected $config;

    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../..');
        $dotenv->load();
        $this->config = $_ENV;
    }

    public function get(string $key, $default = null)
    {
        return $this->config[$key] ?? $default;
    }
}
