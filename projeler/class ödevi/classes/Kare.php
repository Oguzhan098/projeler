<?php
require_once 'Sekil.php';

class Kare extends Sekil {
    private $kenar;

    public function __construct($kenar) {
        $this->kenar = $kenar;
    }

    public function alan() {
        return pow($this->kenar, 2);
    }

    public function cevre() {
        return 4 * $this->kenar;
    }
}
<?php
