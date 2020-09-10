<?php

namespace core\SimpleORM\DataDB;

use core\Interfaces\DataDB\FindDataInterface;
use core\Interfaces\QuerySql\QuerySqlStringInterface;
use core\interfaces\Repository\RepositoryDataDBInterface;

class FindData implements FindDataInterface
{
  /**
   * @var QuerySqlStringInterface $querySqlStringInterface
   */
  private $querySqlStringInterface;

  /**
   * @var RepositoryDataDBInterface $repositoryDataDBInterface
   */
  private $repositoryDataDBInterface;

  public function __construct(QuerySqlStringInterface &$querySqlStringInterface, RepositoryDataDBInterface &$repositoryDataDBInterface)
  {
    $this->querySqlStringInterface = $querySqlStringInterface;
    $this->repositoryDataDBInterface = $repositoryDataDBInterface;
  }

  public function find(int $tableIdentifier, array $tableColumns = null): array
  {
    $this->querySqlStringInterface->setSelect($tableColumns);
    $this->querySqlStringInterface->setTableIdentifier($tableIdentifier);
    $this->repositoryDataDBInterface->setQuery($this->querySqlStringInterface->getSelect() . $this->querySqlStringInterface->getTableIdentifier());

    return $this->repositoryDataDBInterface->getDataDB();
  }
}
