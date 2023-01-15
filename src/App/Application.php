<?php

namespace App;

use App\Interface\ServiceFactoryInterface;

class Application
{
    protected $DBConnection;
    protected $DBRecord;
    protected $DBQueryBuller;

    public function __construct(ServiceFactoryInterface $serviceFactory)
    {
        $this->DBConnection = $serviceFactory->createDBConnection();
        $this->DBRecord = $serviceFactory->createDBRecord();
        $this->DBQueryBuller = $serviceFactory->createDBQueryBuller();
    }

    public function run()
    {
        return '123';
    }
}