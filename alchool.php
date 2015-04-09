?php

class Alchohol {

    private static $ImgPath = "/lab5/img/";
    private $id;
    private $name;
    private $type;
    private $displacement;
    private $strength;
    private $country;
    private $img;
    private $price;
    private $text;

    public function __construct($elem) {

        $this->id = $elem['id'];
        $this->name = $elem['name'];
        $this->type = $elem['type'];
        $this->strength = $elem['strength'];
        $this->displacement = $elem['displacement'];
        $this->country = $elem['country'];
        $this->img = $elem['img'];
        $this->price = $elem['price'];
        $this->text = $elem['text'];
    }

    public function GetText() {
        return $this->text;
    }

    public function GetId() {
        return $this->id;
    }

    public function GetName() {
        return $this->name;
    }

    public function GetType() {
        return $this->type;
    }

    public function GetDisplacement() {
        return $this->displacement;
    }

    public function GetStrength() {
        return $this->strength;
    }

    public function GetCountry() {
        return $this->country;
    }

    public function GetImg() {
        return Alchohol::$ImgPath . $this->img;
    }

    public static function SetImgPath($path) {
        Alchohol::$ImgPath = $path;
    }

    public function GetPrice() {
        return $this->price;
    }

    public function ValidateName() {

        if (iconv_strlen($this->name, 'UTF-8') > 5)
            return TRUE;
        else
            return FALSE;
    }

    public function ValidateType() {

        if (iconv_strlen($this->type, 'UTF-8') > 2)
            return TRUE;
        else
            return FALSE;
    }

    public function ValidateId() {
        if ($this->id > 0 and preg_match("/\d/", $this->id))
            return TRUE;
        else
            return FALSE;
    }

    public function ValidateStrength() {
        if ($this->strength > 0 and $this->strength <= 100 and preg_match("/\d/", $this->strength))
            return TRUE;
        else
            return FALSE;
    }

    public function ValidateText() {
        if (iconv_strlen($this->text, 'UTF-8') > 30)
            return TRUE;
        else
            return FALSE;
    }

    public function ValidateDisplacement() {
        if ($this->displacement > 0 and preg_match("/\d./", $this->displacement) and $this->displacement < 10)
            return TRUE;
        else
            return FALSE;
    }

    public function ValidatePrice() {
        if ($this->price > 10 and $this->price < 99999 and preg_match("/\d/", $this->price))
            return TRUE;
        else
            return FALSE;
    }

    public function ValidateCountry() {
        if (preg_match("/[А-Я]{1}[а-я]{1,14}/", $this->country))
            return TRUE;
        else
            return FALSE;
    }

    public function ValidateImg() {

        $imgtype = array(
            1 => "jpg",
            2 => "jpeg",
            3 => "bmp",
            4 => "png",
        );

        for ($i = 0; $i < count($imgtype); $i++)
            if (substr(strrchr($this->img, '.'), 1) == $imgtype[$i])
                return TRUE;
    }

    public function ValidateAll() {
        if ($this->ValidateId() and
                $this->ValidateName() and
                $this->ValidateType() and
                $this->ValidateDisplacement() and
                $this->ValidateStrength() and
                $this->ValidateCountry() and
                $this->ValidateImg() and
                $this->ValidateText() and
                $this->ValidatePrice()
        )
            return TRUE;
        else
            return FALSE;
    }

}

?>
