<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');

echo json_encode(
  [
    "status" => "1",
    "response" => [
        "alertMessage" => [
            [
                "alertItem" => "pendingBills",
                "message" => "Kindly requesting you to clear your pending dues.Click here to view your pending bills.",
                "color" => "#ec2028",
                "textColor" => "#ffffff",
                "type" => "pending"
            ]
        ],
        "data" => [
            "account_manager" => 1,
            "amc" => 3,
            "corporate_broadband" => 67,
            "corporate_lease" => 2,
            "consumer_broadband" => 2,
            "viatv_subscription" => 15
        ]
    ]
  ]
);
