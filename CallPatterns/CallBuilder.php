<?php

include_once "CallPatternAbstract.php";

class CallBuilder extends CallPatternAbstract
{
    public function __construct(string $patternType = NULL, $pattern = NULL)
    {
        parent::__construct('CREATIONAL', 'BUILDER');
    }

    public function work(string $path)
    {
        include_once ($path . "/Creational/Builder/MysqlQueryBuilder.php");
        $queryBuilder = new MysqlQueryBuilder();
        $query = $queryBuilder
            ->select("users", ["name", "email", "password"])
            ->where("age", 18, ">")
            ->where("age", 30, "<")
            ->and("gender", 'M', "=")
            ->orderBy('id', 'DESC')
            ->limit(10, 20)
            ->getSQL();

        echo $query;
    }
}


//$a = new Address();
//$aa = $a->withCity('sofiq')
//    ->withCountry('Bulgaria')
//    ->getAddress();
//
//$b = new Address();
//$bb = $b->withCountry('romania')
//    ->getAddress();
//
//echo '<pre>' . var_export($aa, true) . '</pre>';
//echo '<pre>' . var_export($bb, true) . '</pre>';
//exit();

?>
