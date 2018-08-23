<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LB_Controller extends CI_Controller {
    public $mollie;

    public function __construct() {
        parent::__construct();

        $this->config->load('modals');

        $this->load->helper('user');
        $this->load->helper('url');
        $this->load->helper('theme');
        $this->load->helper('form');
        $this->load->helper('language');
        $this->load->helper('lang');
        $this->load->helper('html');
        $this->load->helper('query');
        $this->load->helper('inbox');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->database();

        $this->lang->load(array('pages'));
        $this->lang->load(array('forms'));

        /*
         * Make sure to disable the display of errors in production code!
         */
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        require_once __DIR__ . "/../../vendor/autoload.php";
        /*
         * Initialize the Mollie API library with your API key.
         *
         * See: https://www.mollie.com/dashboard/developers/api-keys
         */
        $mollie = new \Mollie\Api\MollieApiClient();
        $mollie->setApiKey("test_2zz3xvjcrhqKSc5hm9K3jwvN2T7whh");

    }
}
