<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');

echo json_encode(
    [
        "status" => "1",
        "statusCode" => 200,
        "message" => [
            "Data Found!!!"
        ],
        "response" => [
            "rewardPoint" => 0,
            "packages" => [
                "customerId" => "00933",
                "serviceId" => 12345,
                "serviceType" => "iptv",
                "package" => [
                    "optionlist" => [
                        [
                            "packageRate" => "Rs. 13,788.00",
                            "serviceId" => 1,
                            "service_name" => "200Mbps - Ultra-Fi L 200 TV+ (12 Months)",
                            "packageName" => "FiberHome Ultra-Fi L 200 TV+ (1 year)",
                            "promotionType" => "Starter",
                            "speed" => "200 Mbps",
                            "duration" => "12 Months",
                            "total" => "1800.00",
                            "discount" => "0.00",
                            "service_rate_back" => "Rs. 13,788.00",
                            "activationCharge" => "1792.44",
                            "depositCharge" => "15580.44",
                            "vat" => "Rs. 1,792.44",
                            "grandTotal" => "15580.44"
                        ],
                        [
                            "packageRate" => "Rs. 13,788.00",
                            "serviceId" => 2,
                            "service_name" => "200Mbps - Ultra-Fi L 200 TV+ (12 Months)",
                            "packageName" => "FiberHome Ultra-Fi L 200 TV+ (1 year)",
                            "promotionType" => "Starter",
                            "speed" => "200 Mbps",
                            "duration" => "12 Months",
                            "total" => "1800.00",
                            "discount" => "0.00",
                            "service_rate_back" => "Rs. 13,788.00",
                            "activationCharge" => "1792.44",
                            "depositCharge" => "15580.44",
                            "vat" => "Rs. 1,792.44",
                            "grandTotal" => "15580.44"
                        ],[
                            "packageRate" => "Rs. 13,788.00",
                            "serviceId" => 3,
                            "service_name" => "200Mbps - Ultra-Fi L 200 TV+ (12 Months)",
                            "packageName" => "FiberHome Ultra-Fi L 200 TV+ (1 year)",
                            "promotionType" => "Starter",
                            "speed" => "200 Mbps",
                            "duration" => "12 Months",
                            "total" => "1800.00",
                            "discount" => "0.00",
                            "service_rate_back" => "Rs. 13,788.00",
                            "activationCharge" => "1792.44",
                            "depositCharge" => "15580.44",
                            "vat" => "Rs. 1,792.44",
                            "grandTotal" => "15580.44"
                        ],[
                            "packageRate" => "Rs. 13,788.00",
                            "serviceId" => 4,
                            "service_name" => "200Mbps - Ultra-Fi L 200 TV+ (12 Months)",
                            "packageName" => "FiberHome Ultra-Fi L 200 TV+ (1 year)",
                            "promotionType" => "Starter",
                            "speed" => "200 Mbps",
                            "duration" => "12 Months",
                            "total" => "1800.00",
                            "discount" => "0.00",
                            "service_rate_back" => "Rs. 13,788.00",
                            "activationCharge" => "1792.44",
                            "depositCharge" => "15580.44",
                            "vat" => "Rs. 1,792.44",
                            "grandTotal" => "15580.44"
                        ],[
                            "packageRate" => "Rs. 13,788.00",
                            "serviceId" => 5,
                            "service_name" => "200Mbps - Ultra-Fi L 200 TV+ (12 Months)",
                            "packageName" => "FiberHome Ultra-Fi L 200 TV+ (1 year)",
                            "promotionType" => "Starter",
                            "speed" => "200 Mbps",
                            "duration" => "12 Months",
                            "total" => "1800.00",
                            "discount" => "0.00",
                            "service_rate_back" => "Rs. 13,788.00",
                            "activationCharge" => "1792.44",
                            "depositCharge" => "15580.44",
                            "vat" => "Rs. 1,792.44",
                            "grandTotal" => "15580.44"
                        ],[
                            "packageRate" => "Rs. 13,788.00",
                            "serviceId" => 6,
                            "service_name" => "200Mbps - Ultra-Fi L 200 TV+ (12 Months)",
                            "packageName" => "FiberHome Ultra-Fi L 200 TV+ (1 year)",
                            "promotionType" => "Starter",
                            "speed" => "200 Mbps",
                            "duration" => "12 Months",
                            "total" => "1800.00",
                            "discount" => "0.00",
                            "service_rate_back" => "Rs. 13,788.00",
                            "activationCharge" => "1792.44",
                            "depositCharge" => "15580.44",
                            "vat" => "Rs. 1,792.44",
                            "grandTotal" => "15580.44"
                        ]
                    ]
                ]
            ],
            "gateway" => [
                "Online Payment" => [
                    [
                        "name" => "esewa",
                        "icon" => "https:\/\/cportalv2.vianet.com.np\/images\/online-pay\/esewa.png",
                        "url" => "payments\/esewa",
                        "type" => "link",
                        "mode" => "Active",
                        "title" => "eSewa"
                    ],
                    [
                        "name" => "khalti",
                        "icon" => "https:\/\/cportalv2.vianet.com.np\/images\/online-pay\/khalti.png",
                        "url" => "payments\/khalti",
                        "type" => "link",
                        "mode" => "Active",
                        "title" => "Khalti"
                    ]
                ]
            ]
        ]
    ]    
);