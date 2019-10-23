# DNS

Simple client to retrieve RR's from a DOH endpoint.

Current implement endpoints:
- [Google](src/DoH/GoogleDNSProvider.php)
- [Cloudflare](src/DoH/CloudflareDNSProvider.php)

## Return

A simple Resource Class representing the RR. All resources can be found [here](src/ResourceRecord). 

## Example

```php
<?php

use GuzzleHttp\Client;
use vanCalker\DNS\DoH\DoHClient;
use vanCalker\DNS\DoH\GoogleDNSProvider;

require __DIR__.'/vendor/autoload.php';

$guzzleClient = new Client();
$googleProvider = new GoogleDNSProvider($guzzleClient);

$client = new DoHClient($googleProvider);
// Note: ANY might not always return all records
$response = $client->query('google.nl', 'any');

foreach ($response as $record)
{
    /** @var \vanCalker\DNS\ResourceRecord\Record $record */
    print_r($record);
}
```

## Contribute and using this

Feel free to contribute. Use at your own risk.
