<?php

namespace Statamic\Addons\DeviceDetector;

use Statamic\Extend\Tags;

use DeviceDetector\DeviceDetector;
use DeviceDetector\Parser\Device\DeviceParserAbstract;

class DeviceDetectorTags extends Tags
{

    public function index()
    {
        return $this->device();
    }

    public function clientInfo()
    {
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $dd = new DeviceDetector($userAgent);
        $dd->skipBotDetection();
        $dd->parse();
        return $dd->getClient();
    }

    public function osInfo()
    {
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $dd = new DeviceDetector($userAgent);
        $dd->skipBotDetection();
        $dd->parse();
        return $dd->getOs();
    }

    public function device()
    {
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $dd = new DeviceDetector($userAgent);
        $dd->skipBotDetection();
        $dd->parse();
        return $dd->getDeviceName();
    }

    public function brand()
    {
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $dd = new DeviceDetector($userAgent);
        $dd->skipBotDetection();
        $dd->parse();
        return $dd->getBrandName();
    }

    public function model()
    {
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $dd = new DeviceDetector($userAgent);
        $dd->skipBotDetection();
        $dd->parse();
        return $dd->getModel();
    }

}
