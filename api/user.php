<?php

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $response = 'isana';
        echo $response;
        break;
    case 'POST':
    case 'PATCH':
    case 'DELETE':
}
