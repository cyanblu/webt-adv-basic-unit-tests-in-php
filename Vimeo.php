<?php

class Vimeo implements InterfaceVideo
{
    private string $name;
    private string $source;
    private string $htmlCode;
    private string $time;

    /**
     * @param string $name
     * @param string $source
     * @param string $htmlCode
     */
    public function __construct(string $name, string $source, string $htmlCode, string $time)
    {
        $this->name = $name;
        $this->source = $source;
        $this->htmlCode = $htmlCode;
        $this->time = $time;
    }


    public function getName()
    {
        return $this->name;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function getHtmlCode()
    {
        return $this->htmlCode;
    }

    public function getTime()
    {
        return $this->time;
    }
}