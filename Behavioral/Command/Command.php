 <?php

interface Command
{
    public function execute(): void;

    public function getId(): int;

    public function getStatus(): int;

}