<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');

echo json_encode([
      [
         "id" => "1",
         "name" => "ullens-school",
         "ip" => "110.44.118.190,110.44.126.200,103.41.173.117,110.44.119.66,103.41.173.5,110.44.119.85,110.44.119.174,110.44.119.173,110.44.123.43,103.41.173.39,110.44.123.102,110.44.116.14,110.44.121.223,103.41.172.175,110.44.123.230,110.44.118.29,43.245.87.237,43.245.85.165,103.41.173.41,110.44.125.70,110.44.118.177,110.44.113.86,110.44.123.32,110.44.123.231",
         "bandwidth" => "81920/81920 kbps",
         "status" => "online"
      ],
      [
         "id" => "2",
         "name" => "ullens-school",
         "ip" => "192.168.86.2",
         "bandwidth" => "81920/81920 kbps",
         "status" => "offline"
      ],
      [
         "id" => "3",
         "name" => "ullens-school",
         "ip" => "192.168.11.112",
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
);
