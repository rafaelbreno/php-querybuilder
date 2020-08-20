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

    protected function defineColumns($columns)
    {
        $columns = array_filter($columns, 'strlen');
        return (count($columns) > 0) ? $columns : ['*'];
    }
}