<?php

abstract class WebScrapingCommand implements Command
{

    public $id;
    public $status;
    public $url;

    public function __construct(string $url)
    {
            $this->url = $url;
    }

    public function execute(): void
    {
        $html = $this->download();
        $this->parse($html);
        $this->complete();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    private function download(): string
    {
        $html = file_get_contents($this->getURL());
        echo "WebScrapingCommand: Downloaded {$this->url}\n";

        return $html;
    }

    abstract public function parse(string $html): void;

    public function complete(): void
    {
        $this->status = 1;
        Queue::get()->completeCommand($this);
    }
}