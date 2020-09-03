<?php

namespace core\Interfaces\Connections;

interface DataBaseConnectionInterface
{
  public static function singleton(): self;
  public  function createConnection(): bool;
  public function getConnection(): \PDO;
}
