<?php

header('Content-Type: application/json; charset=utf-8');

echo json_encode(
    [
        [
          "data_usage" => "42467",
          "acctsessiontime" => 144354,
          "s_no" => 1,
          "date" => "2022-09-01 16:26:30/2022-09-03 08:32:24"
        ],
        [
          "data_usage" => "48232",
          "acctsessiontime" => 172800,
          "s_no" => 2,
          "date" => "2022-09-03 08:31:34/2022-09-05 08:31:35"
        ],
        [
          "data_usage" => "20946",
          "acctsessiontime" => 129255,
          "s_no" => 3,
          "date" => "2022-09-05 08:32:06/2022-09-06 20:26:21"
        ],
        [
          "data_usage" => "24769",
          "acctsessiontime" => 172800,
          "s_no" => 4,
          "date" => "2022-09-06 20:26:28/2022-09-08 20:26:28"
        ],
        [
          "data_usage" => "34757",
          "acctsessiontime" => 172800,
          "s_no" => 5,
          "date" => "2022-09-08 20:26:59/2022-09-10 20:26:59"
        ],
        [
          "data_usage" => "40018",
          "acctsessiontime" => 172800,
          "s_no" => 6,
          "date" => "2022-09-10 20:27:31/2022-09-12 20:27:31"
        ],
        [
          "data_usage" => "43533",
          "acctsessiontime" => 172800,
          "s_no" => 7,
          "date" => "2022-09-12 20:28:03/2022-09-14 20:28:03"
        ]
      ]
);