<?php

class Router
{
  protected $routes = [];
  public function __construct($routes)
  {
    $this->routes = $routes;
  }
  public function direct($url)
  {
    if (array_key_exists($url, $this->routes)) {
      return $this->routes[$url];
    }
  }
}

$routes = [
  '/index.php' => './mock/home.php',
  '/index.php/corporate/home' => './mock/home.php',

  '/index.php/usagegraph/daily' => './mock/UsageGraph/Daily.php',
  '/index.php/usagegraph/weekly' => './mock/UsageGraph/Weekly.php',
  '/index.php/usagegraph/monthly' => './mock/UsageGraph/Monthly.php',
  '/index.php/usagegraph/yearly' => './mock/UsageGraph/Yearly.php',

  '/index.php/usageTable/daily' => './mock/UsageTable/DailyUsageTableData.php',
  '/index.php/usageTable/session' => './mock/UsageTable/SessionUsageTableData.php',

  '/index.php/corporate/viatv-subscription' => './mock/ViaTVSubscription/CorporateConnectedTV.php',
  '/index.php/corporate/iptv-packagelist' => './mock/ViaTVSubscription/PackageList.php',
  '/index.php/corporate/order-package' => './mock/ViaTVSubscription/OrderPackage.php',
  '/index.php/corporate/edit-alias' => './mock/ViaTVSubscription/EditAlias.php',
  '/index.php/corporate/package-order-cancel' => './mock/ViaTVSubscription/PackageOrderCancel.php',

  '/index.php/corporate/broadband' => './mock/corporate-broadband.php',
  '/index.php/consumer/broadband' => './mock/ConsumerBroadband.php',
  '/index.php/corporate/lease' => './mock/CorporateLease.php',

  '/index.php/corporate/amc-list' => './mock/AMCData.php',

  '/index.php/corporate/billing' => './mock/Billing.php',

  '/index.php/corporate/contracts' => './mock/Contracts.php',
  '/index.php/corporate/documents' => './mock/Documents.php',


//   VAST
  // '/index.php/vast/2' => './VAST/VAST-2.php'
];

$router = new Router($routes);

require $router->direct($_SERVER["REQUEST_URI"]);
