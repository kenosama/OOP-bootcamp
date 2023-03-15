<?php
class Commercial{
private string $title;
private string $text;
private string $type;

    public function __construct(string $title, string $text, string $type)
    {
        $this->title = $title;
        $this->text = $text;
        $this->type = $type;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function getText(): string
    {
        return $this->text;
    }
    public function getType(): string
    {
        return $this->type;
    }

}