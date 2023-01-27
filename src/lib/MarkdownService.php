<?php

use CatPaw\Attributes\Service;

#[Service]
class MarkdownService {
    private Parsedown $parser;
    public function __construct() {
        $this->parser = new Parsedown();
    }


    public function parse(string $mardkwon):string {
        return $this->parser->parse($mardkwon);
    }
}