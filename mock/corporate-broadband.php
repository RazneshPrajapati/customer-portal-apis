<?php

header('Content-Type: application/json; charset=utf-8');

echo json_encode([
   [
      [
         "id" => "1",
         "name" => "ullens-school",
         "bandwidth" => "81920/81920 kbps",
         "status" => "online"
      ],
      [
         "id" => "2",
         "name" => "ullens-school",
         "bandwidth" => "81920/81920 kbps",
         "status" => "offline"
      ],
      [
         "id" => "3",
         "name" => "ullens-school",
         "bandwidth" => "81920/81920 kbps",
         "status" => "online"
      ],
      [
         "id" => "4",
         "name" => "ullens-school",
         "ip" => "110.44.113.93",
         "bandwidth" => "81920/81920 kbps",
         "status" => "offline"
      ],
      [
         "id" => "5",
         "name" => "ullens-school",
         "bandwidth" => "81920/81920 kbps",
         "status" => "online"
      ]
   ]
]);
