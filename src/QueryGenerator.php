<?php


namespace Kery;


use Helpers\Arr;
use Helpers\Str;

class QueryGenerator
{
    private string $query = "";
    protected array $params = [];
    public function __construct($params)
    {
        $this->params = $params;
    }

    public function returnQuery()
    {
        $this->buildQuery();
        $this->trimQuery();
        return $this->query;
    }

    private function trimQuery()
    {
        $this->query = trim($this->query);
    }

    protected function buildQuery()
    {
        foreach ($this->params as $key => $value)
        {
            $this->{$key}($value);
        }
    }

    protected function method($method = "SELECT")
    {
        $this->concatQuery($method);
    }

    protected function columns($columns)
    {
        $this->concatQuery(
            Arr::concatWithDelimiter($columns)
        );
    }

    protected function table($table)
    {
        $this->concatQuery("from {$table}");
    }

    private function concatQuery($queryPiece)
    {
        $this->query = implode(' ', [$this->query, $queryPiece]);
    }

    protected function where($params)
    {
        $this->query = implode(' ', [$this->query, $this->generateWhere($params)]);
    }

    private function generateWhere($wheres)
    {
        $where = "WHERE ";
//        print_r($wheres);
        foreach ($wheres as $key => $value)
        {
//            print_r($value)
            $where .= implode(' ', $value) . " ";
        }
        return trim($where);
    }

}