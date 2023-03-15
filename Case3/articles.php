<?php
class Article{
    private string $title;
    private string $text;
    private string $type;
    private bool $isBreakingNews=false; 

    public function __construct(string $title, string $text, string $type,bool $isBreakingNews)
    {
        $this->title = $title;
        $this->text = $text;
        $this->type = $type;
        $this->isBreakingNews=$isBreakingNews;
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

