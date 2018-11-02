<?php
    //Машина
    class Car 
    {
        public $model;
        public $color;
        public $price;
        public function __construct ($model, $color, $price) {
            $this -> model = $model;
            $this -> color = $color;
            $this -> price = $price;
        }
        public function getCar()
        {
            echo $this->model . ', ' . $this->color . ', ' . $this->price . ' руб.';
        }
    }
	//Объекты
    $mini = new Car('Mini COOPER S', 'красный', '1 355 000');
    $bmw = new Car('BMW 540', 'черный', '2 510 000');

	//Телевизор
    class TV
    {
        public $mark;
        public $resolution;
        public $price;
        public function __construct ($mark, $resolution, $price) {
            $this -> mark = $mark;
            $this -> resolution = $resolution;
            $this -> price = $price;
        }
        public function getTV()
       {
            echo $this->mark . ', ' . $this->resolution . ', ' . $this->price . ' руб.';
        }
    }
	//Объекты	
    $sony = new TV('Sony KDL40RD453', 'Full HD', '29 990');
    $lg = new TV('LG 32LH570U', 'HD Ready', '17 990');

	//Шариковая ручка
    class Ballpen
    {
        public $model;
        public $inkColor;
		public $country;
        public $price;
        public function __construct ($model, $inkColor, $country, $price) {
            $this -> model = $model;
            $this -> inkColor = $inkColor;
			$this -> country = $country;
            $this -> price = $price;
        }
        public function getBallpen()
        {
            echo $this->model . ', ' . $this->inkColor . ' стержень, ' . $this->country . ', ' . $this->price . ' руб.';
        }
    }
	//Объекты
    $pilot = new Ballpen('Pilot BP-S', 'фиолетовый', 'Япония', '49');
    $bic = new Ballpen('Bic Cristal Up', 'черный', 'Мексика', '28');

    //Утка
    class Duck
    {
        public $name;
        public $material;
        public $price;
        public function __construct ($name, $material, $price) {
            $this -> name = $name;
			$this -> material = $material;
            $this -> price = $price;
        }
        public function getDuck()
        {
            echo $this->name . ', ' . $this->material . ', ' . $this->price . ' руб.';
        }
    }
	//Объекты	
   $hansa = new Duck('Утка-кряква', 'плюш', '1 476');
   $funnyDucks = new Duck('Эйнштейн уточка', 'резина', '349');

    //Товар   
    class Product
    {
        public $name;
		public $type;
        public $volume;
        public $price;
        public function __construct ($name, $type, $volume, $price) {
		    $this -> name = $name;
            $this -> type = $type;
			$this -> volume = $volume;
            $this -> price = $price;

        }
        public function getProduct()
        {
            echo $this->name . ', ' . $this->type . ', ' . $this->volume . ' мл, ' . $this->price . ' руб.';
        }
    }
	//Объекты	
    $chanel = new Product('Chanel Gabrielle', 'парфюмерная вода', '100', '6 768');
    $molinard = new Product('Molinard Peynet Les Amoureux Eau Fraiche', 'туалетная вода', '100', '3 800');
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Классы и объекты</title>
  </head>
  <body>
    <h3>Машина</h3>
    <?=$mini->getCar();?>
    <h3>Телевизор</h3>
    <?=$sony->getTV();?>
    <h3>Ручка</h3>
    <?=$pilot->getBallpen();?>
    <h3>Утка</h3>
    <?=$funnyDucks->getDuck();?>
    <h3>Товар</h3>
    <?=$chanel->getProduct();?>
  </body>
</html>
