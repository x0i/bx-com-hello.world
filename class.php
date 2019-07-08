<?php

class CX0iHelloWorld extends CBitrixComponent {

    public function executeComponent () {
        $this->arResult = [
            'MESSAGE' => 'Hello, world!',
        ];
        $this->includeComponentTemplate();
    }

}
