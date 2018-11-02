<?php
    class News
    {
        private $news;
        public function __construct($name)
        {
            $file = file_get_contents($name);
            $decode = json_decode($file, true);
            $this->news = $decode;
        }
        public function getNews()
        {
            $newsList ='';
            foreach ($this->news as $item)
            {
                $newsList .= '<h3>' . $item['title'] . '</h3>' . '<b>' . $item['data'] . '</b>' . '<p>' . $item['text'] . '</p>' . '<br>';
            }
            return $newsList;
        }
    }
    $newsSite = new News('newsSite.json');
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Новости</title>
  </head>
  <body>
    <h1>Новости</h1>
    <?=$newsSite->getNews();?>
  </body>
</html>
