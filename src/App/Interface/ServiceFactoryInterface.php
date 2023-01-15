<?php
namespace App\Interface;

interface ServiceFactoryInterface
{
public function createDBConnection(): DBConnectionInterface;
public function createDBRecord(): DBRecordInterface;
public function createDBQueryBuller(): DBQueryBullerInterface;
}