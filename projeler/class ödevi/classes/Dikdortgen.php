<?php
require_once 'Sekil.php';

class Dikdortgen extends Sekil {
    private $uzunKenar, $kisaKenar;

    public function __construct($u, $k) {
        $this->uzunKenar = $u;
        $this->kisaKenar = $k;
    }

    public function alan() {
        return $this->uzunKenar * $this->kisaKenar;
    }

    public function cevre() {
        return 2 * ($this->uzunKenar + $this->kisaKenar);
    }
}
<?php
