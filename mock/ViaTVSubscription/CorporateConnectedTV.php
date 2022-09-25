<?php

header('Content-Type: application/json; charset=utf-8');

echo json_encode(
    [
        "status" => "1",
        "statusCode" => 200,
        "message" => [
            "Data Found!!!"
        ],
        "response" => [
            [
                "billingInfoId" => 12345,
                "serviceName" => "11223344",
                "parentName" => "test",
                "expiryDate" => "2022-11-10",
                "package" => "NetTV Diamond (1 month)",
                "macAddress" => "00:0a:95:9d:68:16",
                "status" => "active",
                "packageId" => 123,
                "pendingBills" => "true",
                "serviceType" => "Primary",
                "parentId" => 54321,
                "type" => "ViaTV 1",
                "alias_name" => "Waiting Room"
            ],
            [
                "billingInfoId" => 12345,
                "serviceName" => "11223344",
                "parentName" => "test",
                "expiryDate" => "2022-11-10",
                "package" => "NetTV Diamond (1 month)",
                "macAddress" => "00:0a:95:9d:68:16",
                "status" => "active",
                "packageId" => 123,
                "pendingBills" => "true",
                "serviceType" => "Secondary",
                "parentId" => 54321,
                "type" => "ViaTV 1"
            ],
            [
                "billingInfoId" => 12345,
                "serviceName" => "11223344",
                "parentName" => "test",
                "expiryDate" => "2022-11-10",
                "package" => "NetTV Diamond (1 month)",
                "macAddress" => "00:0a:95:9d:68:16",
                "status" => "active",
                "packageId" => 123,
                "pendingBills" => "true",
                "serviceType" => "Others",
                "parentId" => 54321,
                "type" => "ViaTV 1",
                "alias_name" => "Living Room"
            ],
            [
                "billingInfoId" => 12345,
                "serviceName" => "11223344",
                "parentName" => "test",
                "expiryDate" => "2022-8-10",
                "package" => "NetTV Diamond (1 month)",
                "macAddress" => "00:0a:95:9d:68:16",
                "status" => "expired",
                "packageId" => 123,
                "pendingBills" => "true",
                "serviceType" => "Primary",
                "parentId" => 54321,
                "type" => "ViaTV 1",
                "alias_name" => "Waiting Room"
            ],
            [
                "billingInfoId" => 12345,
                "serviceName" => "11223344",
                "parentName" => "test",
                "expiryDate" => "2022-11-10",
                "package" => "NetTV Diamond (1 month)",
                "macAddress" => "00:0a:95:9d:68:16",
                "status" => "active",
                "packageId" => 123,
                "pendingBills" => "true",
                "serviceType" => "Primary",
                "parentId" => 54321,
                "type" => "ViaTV 1",
                "alias_name" => "Waiting Room"
            ],
            [
                "billingInfoId" => 12345,
                "serviceName" => "11223344",
                "parentName" => "test",
                "expiryDate" => "2022-11-10",
                "package" => "NetTV Diamond (1 month)",
                "macAddress" => "00:0a:95:9d:68:16",
                "status" => "active",
                "packageId" => 123,
                "pendingBills" => "true",
                "serviceType" => "Primary",
                "parentId" => 54321,
                "type" => "ViaTV 1",
                "alias_name" => "Waiting Room",
                "taskId" => "12132"
            ]
        ]
    ]
);