<?php

namespace App;

class Joueur {
    public Jeton $jeton;

    public function __construct(public string $symbol = 'x', public string $cssClasses) {
        $this->jeton = new Jeton($this);
    }
}
