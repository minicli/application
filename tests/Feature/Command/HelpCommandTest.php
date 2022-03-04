<?php

test('the "help" command prints the command tree', function () {
    $app = getApp();
    $app->runCommand(['minicli', 'help']);
})->expectOutputRegex("/Available Commands/");

test('default command "help" is correctly loaded', function () {
    $app = getApp();
    $app->runCommand(['minicli', 'help']);
})->expectOutputRegex("/help/");

test('the "help test" command echoes command parameters', function () {
    $app = getApp();
    $app->runCommand(['minicli', 'help', 'test', 'user=erika']);
})->expectOutputRegex("/erika/");

test('the "help table" command prints test table', function () {
    $app = getApp();
    $app->runCommand(['minicli', 'help', 'table']);
})->expectOutputRegex("/Header 3/");
