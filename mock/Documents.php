<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');

echo json_encode(
   [
    "status"=>"1",
    "statusCode"=>200,
    "message"=>[
        "Data Found!!!"
    ],
    "response"=>[
        [
            "id"=>"1",
            "documentType"=>"PAN/VAT Registration",
            "serviceName"=>"omVianet123",
        ],
        [
            "id"=>"2",
            "documentType"=>"PAN/VAT Registration",
            "serviceName"=>"ViaBoy19",
        ],
        [
            "id"=>"3",
            "documentType"=>"PAN/VAT Registration",
            "serviceName"=>"Rain1997",
        ],
        [
            "id"=>"4",
            "documentType"=>"PAN/VAT Registration",
            "serviceName"=>"Poem10",
        ]
      ]
   ]
);
