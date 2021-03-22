<?php


class Publications
{
    public $id;
    public $title;
    public $date;
    public $short_content;
    public $content;
    public $preview;
    public $author_name;
    public $type;

    function __construct($row)
    {
        $this->id = $row['id'];
        $this->title = $row['title'];
        $this->date = $row['date'];
        $this->short_content = $row['short_content'];
        $this->content = $row['short_content'];
        $this->preview = $row['preview'];
        $this->author_name = $row['author_name'];
        $this->type = $row['type'];
    }

}


class NewsPublication extends Publications
{
    public function printItem(){
        echo '<br> Новость: '. $this->title;
        echo '<br> Дата: ' . $this->date;
        echo '<hr>';
    }
}

class ArticlePublication extends Publications
{
    public function printItem(){
        echo '<br> Статья: '. $this->title;
        echo '<br> Автор:' . $this->author_name;
        echo '<hr>';
    }
}

class PhotoReportPublication extends Publications
{
    public function printItem(){
        echo '<br> Фотоотчет: '. $this->title;
        echo '<br> <img src="http://localhost/polimorf/' . $this->preview.'" alt="">';
        echo '<hr>';
    }
}
