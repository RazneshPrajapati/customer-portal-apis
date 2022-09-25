<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');

echo json_encode(
    [
        [
          "id" => "1",
          "name" => "NIC-ASIA-Bank-Intranet-Chandragiri",
          "bandwidth" => "5/5 Mbps [Corporate Fiber Links]",
          "status" => "online",
          "details" => [
            "name" => "ullens-school",
            "sn" => "1",
            "start_date" => "2021-07-16",
            "end_date" => "2021-07-17",
            "remarks" => "Renew your service from the app and get CASHBACK & Reward points."
          ]
        ],
        [
          "id" => "2",
          "name" => "NIC-Asia-Bank-Limited-Darchula",
          "bandwidth" => "5/5 Mbps [Corporate Fiber Links]",
          "status" => "offline",
          "details" => [
            "name" => "NIC-Asia-Bank-Limited-Darchula",
            "sn" => "2",
            "start_date" => "2021-07-16",
            "end_date" => "2021-07-17",
            "remarks" => "Renew your service from the app and get CASHBACK & Reward points."
          ]
        ],
        [
          "id" => "3",
          "name" => "NIC-Asia-Tarkeshwor-Municipality-Office",
          "bandwidth" => "5/5 Mbps [Corporate Fiber Links]",
          "status" => "online",
          "details" => [
            "name" => "NIC-Asia-Tarkeshwor-Municipality-Office",
            "sn" => "3",
            "start_date" => "2021-07-16",
            "end_date" => "2021-07-17",
            "remarks" => "Renew your service from the app and get CASHBACK & Reward points."
          ]
        ],
        [
          "id" => "4",
          "name" => "NIC-ASIA-Bank-Shantinagar-MinMart-Pokhatra-ATM",
          "bandwidth" => "5/5 Mbps [Corporate Fiber Links]",
          "status" => "offline",
          "details" => [
            "name" => "NIC-ASIA-Bank-Shantinagar-MinMart-Pokhatra-ATM",
            "sn" => "4",
            "start_date" => "2021-07-16",
            "end_date" => "2021-07-17",
            "remarks" => "Renew your service from the app and get CASHBACK & Reward points."
          ]
        ],
        [
          "id" => "5",
          "name" => "ullens-school",
          "bandwidth" => "5/5 Mbps [Corporate Fiber Links]",
          "status" => "online",
          "details" => [
            "name" => "ullens-school",
            "sn" => "5",
            "start_date" => "2021-07-16",
            "end_date" => "2021-07-17",
            "remarks" => "Renew your service from the app and get CASHBACK & Reward points."
          ]
        ]
      ]   
);