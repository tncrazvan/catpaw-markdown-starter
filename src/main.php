<?php

use function Amp\File\isDirectory;
use function CatPaw\deleteDirectoryRecursively;

use CatPaw\Web\Attributes\StartWebServer;

#[StartWebServer]
function main() {
    if (yield isDirectory('.cache')) {
        yield deleteDirectoryRecursively('.cache');
    }
}
