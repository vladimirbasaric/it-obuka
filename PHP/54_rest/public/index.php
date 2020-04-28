<?php

require_once __DIR__ . '/../src/functions.php';
require_once __DIR__ . '/../src/post.php';

// Default index page
route('GET', '^/$', function() {
    echo '<a href="posts">List posts</a><br>';
});

// GET request to /posts
route('GET', '^/posts$', function() {
    $posts = UserPost::GetAll();

    header('Content-Type: application/json');
    echo json_encode($posts);
});

// With named parameters
route('GET', '^/posts/(?<id>\d+)$', function($params) {
    $post = UserPost::GetPost($params['id']);

    header('Content-Type: application/json');
    echo json_encode($post);
});

// POST request to /posts
route('POST', '^/posts$', function() {
    $json = json_decode(file_get_contents('php://input'), true);
    $status = UserPost::CreatePost($json);

    header('Content-Type: application/json');
    echo json_encode([
        'success' => $status,
        'data' => $json,
    ]);
});

// POST request to /posts
route('PUT', '^/posts$', function() {
    // TODO - postoji greska u konfiguraciji dozvola

    // $json = json_decode(file_get_contents('php://input'), true);
    // $status = UserPost::CreatePost($json);
    echo 'PUT was given';
});


route('DELETE', '^/posts$', function() {
    // TODO - postoji greska u konfiguraciji dozvola
    echo 'DELETE was given';
});

header('HTTP/1.0 404 Not Found');
echo '404 Not Found';

