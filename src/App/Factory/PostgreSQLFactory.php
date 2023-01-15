<?php

namespace App\Factory;

use App\Class\DBConnection;
use App\Class\DBQueryBuller;
use App\Class\DBRecord;
use App\Interface\DBConnectionInterface;
use App\Interface\DBQueryBullerInterface;
use App\Interface\DBRecordInterface;
use App\Interface\ServiceFactoryInterface;

class PostgreSQLFactory implements ServiceFactoryInterface
{

    public function createDBConnection(): DBConnectionInterface
    {
        return new DBConnection();
    }

    public function createDBRecord(): DBRecordInterface
    {
        return new DBRecord();
    }

    public function createDBQueryBuller(): DBQueryBullerInterface
    {
        return new DBQueryBuller();
    }
}