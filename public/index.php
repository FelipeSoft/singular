<?php
require __DIR__ . '/../bootstrap/routes.php';

$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rtrim($uri, '/');

$found = false;

foreach ($routes[$method] ?? [] as $route => $handler) {
    $pattern = preg_replace('#\{([a-zA-Z_][a-zA-Z0-9_]*)\}#', '([^/]+)', $route);
    $pattern = "#^" . rtrim($pattern, '/') . "$#";

    if (preg_match($pattern, $uri, $matches)) {
        array_shift($matches);
        preg_match_all('#\{([a-zA-Z_][a-zA-Z0-9_]*)\}#', $route, $paramNames);
        $params = array_combine($paramNames[1], $matches);

        $found = true;
        $handler($params);
        break;
    }
}

if (!$found) {
    http_response_code(404);
    echo "Página não encontrada.";
}

// how to inject dependencies:
// $container = require __DIR__ . '/../bootstrap/container.php';

// use Src\Application\UseCases\HomeUseCase;

// /** @var HomeUseCase $homeUseCase */
// $homeUseCase = $container['homeUseCase']();
// echo $homeUseCase->test();