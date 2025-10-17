<?php

test('Essa variavel é uma strig?', function () {
    $name = 1;
    expect($name)->toBeString();
});
