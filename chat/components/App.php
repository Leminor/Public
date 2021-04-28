<?php


namespace components;


class App
{
    private const ROUTER = 'router';
    private const VIEW = 'view';

    private Storage $config;
    private Storage $components;

    private static ?App $app = null;

    public static function init(array $config): self
    {
        if (self::$app !== null) {
            throw new \RuntimeException('Application is already initiated');
        }

        self::$app = new self($config);
        return self::$app;
    }

    public static function instance(): self
    {
        if (self::$app === null) {
            throw new \RuntimeException('Application is not initiated');
        }
        return self::$app;

    }

    public function run(): mixed
    {
        $this->initView();
        return $this->initRouter();
    }

    public function initRouter(): mixed
    {
        if (PHP_SAPI === 'cli') {
            $dispatcher = new \components\cli\CliDispatcher();
        } else {
            $dispatcher = new \components\web\WebDispatcher();
        }

        $router = new \components\Router($dispatcher);
        $this->components->set(self::ROUTER, $router);

        return $router->init();
    }

    private function initView(): void
    {
        $view = new View(
            $this->config->get('views.dir'),
            $this->config->get('views.ext'),
            $this->config->get('views.layouts.dir'),
            $this->config->get('views.layouts.default'),
            $this->config->get('views.layouts.guest'));

        $this->components->set(self::VIEW, $view);
    }

    public function getView(): View
    {
        return $this->components->get(self::VIEW);
    }

    private function __construct(array $config)
    {
        $this->config = new Storage($config);
        $this->components = new Storage();
    }

    private function __clone(): void
    {

    }
}