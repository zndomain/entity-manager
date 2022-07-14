<?php

namespace ZnDomain\EntityManager\Interfaces;

interface TransactionInterface
{

    public function beginTransaction();

    public function rollbackTransaction();

    public function commitTransaction();
}