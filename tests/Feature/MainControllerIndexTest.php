<?php

use App\Http\Controllers\MainController;

test('Testando MainController - Index', function () {
    $mainController = new MainController();

    $response = $mainController->index();

    // Verifica se a resposta é uma string e se é igual a "Ola Mundo"
    expect($response)->toBeString();
    expect($response)->toEqual("Ola Mundo"); 
});