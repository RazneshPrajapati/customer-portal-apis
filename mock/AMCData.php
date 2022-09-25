<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');

echo json_encode(
    [
        [
          "id" => "1",
          "name" => "Zoom-3176-4",
          "service"  => "Zoom Education",
          "status" => "active",
          "expire_date" => "2023-07-30"
        ],
        [
          "id" => "2",
          "name" => "Zoom-3176-5",
          "service"  => "Zoom Education",
          "status" => "expired",
          "expire_date" => "2023-07-30"
        ],
        [
          "id" => "3",
          "name" => "Zoom-3176",
          "service"  => "Zoom Education",
          "status" => "active",
          "expire_date" => "2022-04-26"
        ],
        [
          "id" => "4",
          "name" => "Zoom-3176-2",
          "service"  => "Zoom Education",
          "status" => "expired",
          "expire_date" => "2021-11-05"
        ],
        [
          "id" => "5",
          "name" => "Zoom-3176-3",
          "service"  => "Zoom Education",
          "status" => "active",
          "expire_date" => "2021-08-13"
        ]
      ]      
);