<?php
/* Here the magic will gain some power
 * here the methods called inside the
 * callback at Writer will take some action
 * and perform the SQL build
 * */

namespace Kery;


class Builder
{
    public array $params = [];
    private string $table;
    public function __construct(string $table)
    {
        $this->table = $table;
    }

    public function generateQuery()
    {
        return (new QueryGenerator($this->params))->returnQuery();
    }

    public function select(...$columns)
    {
        $this->params['method'] = "SELECT";
        $this->params['columns'] = $this->defineColumns($columns);
        $this->params['table'] = $this->table;
    }

    public function where($column, string $condition = "", string $value = "", string $connector = "")
    {
        if(is_array($column)) {
            foreach ($column as $key => $value) {
                $this->params['where'] = array_push($this->params['where'], $value);
            }
        } else {
            $wheres = [$column, $condition, $value, strtoupper($connector)];
            $this->params['where'] = [$wheres];
        }
    }

    protected function defineColumns($columns)
    {
        $columns = array_filter($columns, 'strlen');
        return (count($columns) > 0) ? $columns : ['*'];
    }
}