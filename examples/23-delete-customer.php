<?php

namespace _PhpScoper5b6d7f96f14c0;

/*
Example 23 - Delete a customer from mollie api.
*/
try {
    /*
     * Initialize the Mollie API library with your API key or OAuth access token.
     */
    require "initialize.php";
    $mollie->customers->delete("customer_id");
    echo "Customer deleted!";
} catch (\Mollie\Api\Exceptions\ApiException $e) {
    echo "API call failed: " . \htmlspecialchars($e->getMessage());
}
