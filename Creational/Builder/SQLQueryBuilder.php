<?php

interface SQLQueryBuilder
{
    public function select(string $table, array $fields): SQLQueryBuilder;

    public function where(string $field, string $value, string $operator = ' = '): SQLQueryBuilder;

    public function and(string $field, string $value, string $operator = ' = '): SQLQueryBuilder;



    // TODO add more SQL functions


    public function orderBy(string $field, string $type): SQLQueryBuilder;

    public function limit(int $start, int $offset): SQLQueryBuilder;

    public function getSQL(): string;
}