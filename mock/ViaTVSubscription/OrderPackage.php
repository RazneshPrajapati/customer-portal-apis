<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');

echo json_encode(
    [
        "status" => "1",
        "statusCode" => 200,
        "message" => [
            "Package Order Success!"
        ],
        "response" => ""
    ]
);