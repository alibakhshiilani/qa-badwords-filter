<?php

class qa_badwords_filter
{
    private $bad_words = [];

    public function __construct()
    {
        $this->bad_words = include("bad-words.php");
    }

    private function filter_content(&$content)
    {
        return str_ireplace($this->bad_words, array_map(function ($word) {
            return str_repeat("*", strlen($word));
        }, $this->bad_words), $content);
    }

    public function filter_question(&$content)
    {
        $content["text"] = $this->filter_content($content);
        $content["content"] = $this->filter_content($content);
    }

    public function filter_answer(&$content)
    {
        $content["text"] = $this->filter_content($content);
        $content["content"] = $this->filter_content($content);
    }

    public function filter_comment(&$content)
    {
        $content["text"] = $this->filter_content($content);
        $content["content"] = $this->filter_content($content);
    }

}