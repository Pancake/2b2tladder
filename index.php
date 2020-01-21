<?php

spl_autoload_register(function($class) {
   require_once("includes/$class.php");
});

$table = new OutputPage();
try {
    $table->render();
} catch (HttpException $e) {
    $table->renderError();
}
