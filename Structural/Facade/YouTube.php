<?php

class YouTubeDownloader
{
    public function fetchVideo(): string {
        return 'fetchVideo';
    }

    public function saveAs(string $path): void {
        echo '<pre>' . var_export( "Save as video with path: $path." , true) . '</pre>';
    }
}