<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    /* For Domain Sub pages*/
    public function registerDomain()
    {
        return view('domain.register_domain');
    }
    public function transferDomain()
    {
        return view('domain.transfer_domain');
    }
    public function pkDomain()
    {
        return view('domain.pk_domain');
    }
    public function domainChecker()
    {
        return view('domain.domain_checker');
    }

    /*For Hosting Sub pages*/
    public function businessHosting()
    {
        return view('hosting.business_hosting');
    }
    public function resellerHosting()
    {
        return view('hosting.reseller_hosting');
    }
    public function sharedHosting()
    {
        return view('hosting.shared_hosting');
    }
    public function wordpressHosting()
    {
        return view('hosting.wordpress_hosting');
    }
    /*For Server Sub pages*/
    public function dedicatedServers()
    {
        return view('servers.dedicated_servers');
    }
    public function pakBasedServers()
    {
        return view('servers.pak_based_servers');
    }
    public function ssdServers()
    {
        return view('servers.ssd_servers');
    }
    public function vpsServers()
    {
        return view('servers.vps_servers');
    }





}
