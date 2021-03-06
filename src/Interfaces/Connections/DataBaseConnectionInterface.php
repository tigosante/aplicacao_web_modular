<?php

namespace src\Interfaces\Connections;

interface DataBaseConnectionInterface
{
  /**
   * @return self
   */
  public static function singleton(): self;

  /**
   * @return \PDO
   */
  public function getConnection(): \PDO;

  /**
   * @return bool
   */
  public function createConnection(): bool;
}
