<?php

namespace Hudzhal\UserAgent;

use donatj\UserAgent\UserAgentParser;

class UAParserService implements UserAgentServiceInterface
{
    protected $userAgent;
    protected $parser;

    public function __construct()
    {
        $this->parser = new UserAgentParser();
    }

    public function parse($ua)
    {
        $this->data = $this->parser->parse($ua);
    }

    public function browser(): ?string
    {
        return $this->data->browser();
    }

    public function os(): ?string
    {
        return $this->data->platform();
    }
}
