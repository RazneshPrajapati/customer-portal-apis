<?php

header('Content-Type: application/json; charset=utf-8');

echo json_encode(
   {
    "status"=>"1",
    "statusCode"=>200,
    "message"=>[
        "Data Found!!!"
    ],
    "response"=>[
        {
            "id"=>"1",
            "startDate"=>"2021-07-16",
            "endDate"=>"2022-07-15",
            "serviceType"=>"noor95982",
            "remarks"=>"N/A"
        },
        {
            "id"=>"2",
            "startDate"=>"2020-01-11",
            "endDate"=>"2021-01-10",
            "serviceType"=>"via9566",
            "remarks"=>"Super Dashai Offer"
        },
        {
            "id"=>"3",
            "startDate"=>"2022-07-01",
            "endDate"=>"2023-06-15",
            "serviceType"=>"custo2626",
            "remarks"=>"Customer Easy Pack"
        },
        {
            "id"=>"4",
            "startDate"=>"2021-01-11",
            "endDate"=>"2022-02-11",
            "serviceType"=>"EasyOne",
            "remarks"=>"One month easy internet."
        },
        {
            "id"=>"5",
            "startDate"=>"2022-07-16",
            "endDate"=>"2023-07-15",
            "serviceType"=>"gg1997",
            "remarks"=>"Ultra Gaming Pack"
        }
      ]
   }
);
