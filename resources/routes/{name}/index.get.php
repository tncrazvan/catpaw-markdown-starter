<?php

use CatPaw\Web\Attributes\Param;
use CatPaw\Web\Attributes\Produces;

return #[Produces("text/html")] fn (MarkdownService $md, #[Param] string $name) => $md->parse("# hello $name");