<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matahariiii extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('matahari');
    }

    function index()
    {
        // Ambil data pakaian, jumlah, dan member dari input POST
    
        $this->matahari->index('anak', '2', 'false', '150000', '0', '0', '0');
        echo "<br>";
        echo "<br>";
        $this->matahari->index('laki-laki', '0', 'false', '350000', '0', '0', '0');
        echo "<br>";
        echo "<br>";
        $this->matahari->index('laki-laki', '0', 'true', '300000', '0', '0', '0');
        echo "<br>";
        echo "<br>";
        $this->matahari->index('wanita', '2', 'false', '0', 'ya', '300000', '200000');
    }
}
