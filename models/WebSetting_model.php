<?php

defined('BASEPATH') or exit('No direct script access allowed');

class WebSetting_model extends Marthem_Model
{
    public function menu()
    {
        include 'public/database/menu.php';
        $menuDisplay = '';
        foreach ($menu as $menuItem) {
            $menuDisplay .=
                "<li>
                <a href='./" .
                $menuItem['url'] .
                "' class='menu-item text-capitalize'>" .
                $menuItem['nama'] .
                "</a>
            </li>";
        }

        return $menuDisplay;
    }

    public function webData()
    {
        include 'public/database/webData.php';
        return $webData;
    }

    public function urlActive()
    {
        include 'public/database/urlActive.php';
        $allUrl = [];
        foreach ($urlActive as $url) {
            array_push($allUrl, $url['url']);
        }
        return $allUrl;
    }

    public function urlAccess()
    {
        $requestUri = $_SERVER['REQUEST_URI'];
        // var_dump($this->uri, $requestUri);
        // if (strpos($requestUri, '.')) {
        //     return redirect(site_url());
        // } else {
        $allWebUrl = $this->urlActive();
        $openUrl = $this->uri->segments[1];
        // var_dump($allWebUrl, $openUrl);
        if (in_array($openUrl, $allWebUrl)) {
            return true;
        } else {
            return redirect(site_url());
            // }
        }
    }
}

/* End of file webSetting.php */