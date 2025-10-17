<?php

use App\Services\MainOperations;

test('Testar se gerar uma hash de 32 caractere', function () {
    $hash = MainOperations::generateHash();
    $hashWith64 = MainOperations::generateHash(64);

    expect(strlen($hash))->toBe(32);

    expect(strlen($hashWith64))->toBe(64);

});
