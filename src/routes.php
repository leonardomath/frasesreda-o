<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});


$app->get('/nova-frase', function (Request $request, Response $response, array $args) {
    // Render index view
    return $this->renderer->render($response, 'nova-frase.phtml', $args);
});

$app->post('/nova-frase', function (Request $request, Response $response, array $args) {
    $args['info'] = $request->getParsedBody();
    // Render index view
    return $this->renderer->render($response, 'nova-frase.phtml', $args);
});