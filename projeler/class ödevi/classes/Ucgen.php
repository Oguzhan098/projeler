<?php
require_once 'Sekil.php';

class Ucgen extends Sekil {
    private $a, $b, $c, $h;

    public function __construct($a, $b, $c, $h) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->h = $h;
    }

    public function alan() {
        return ($this->a * $this->h) / 2;
    }

    public function cevre() {
        return $this->a + $this->b + $this->c;
    }
}
<?php
