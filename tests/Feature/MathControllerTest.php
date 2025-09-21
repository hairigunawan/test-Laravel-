<?php

use function Pest\Laravel\get;

test('it can add two numbers from controller', function () {
    $response = get('/api/add?a=5&b=7');

    $response->assertStatus(200);
    $response->assertJson([
        'result' => 12,
    ]);
});
