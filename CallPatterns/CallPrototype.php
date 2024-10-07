<?php

use JetBrains\PhpStorm\NoReturn;

include_once "CallPatternAbstract.php";

class CallPrototype extends CallPatternAbstract
{

    public function __construct(string $patternType = NULL, $pattern = NULL)
    {
        parent::__construct('STRUCTURAL', 'PROTOTYPE');
    }

        #[NoReturn] public function work(string $path)
    {
        require_once ($path . '/Creational/Prototype/Author.php');
        require_once ($path . '/Creational/Prototype/Page.php');

        $author = new Author("John Smith");
        $page = new Page("Tip of the day", "Keep calm and carry on.", $author);
        $page->addComment("Nice tip, thanks!");

        $draft = clone $page;
        $draft->addComment('new draft comment');
        echo '<pre>' . var_export("Dump of the origin.", true) . '</pre>';
        echo '<pre>' . var_export($page->print(), true) . '</pre>';
        echo '<pre>' . var_export("Dump of the clone. Note that the author is now referencing two objects.", true) . '</pre>';
        echo '<pre>' . var_export($draft->print(), true) . '</pre>';
    }
}
