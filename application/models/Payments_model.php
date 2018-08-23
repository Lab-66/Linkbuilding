<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Payments_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function payment_add() {
        $payment = $mollie->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => "15.00"
            ],
            "description" => "codeigniter test",
            "redirectUrl" => site_url('platform/sisters'),
            "webhookUrl"  => "https://webshop.example.org/mollie-webhook/",
        ]);
    }
}
