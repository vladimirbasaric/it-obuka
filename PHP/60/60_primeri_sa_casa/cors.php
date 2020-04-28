<?php
    
    /* 
    Prva linija HTTP odgovora je tzv. statusna linija. Ona sadrzi informaciju o 
    statusnom kodu i odgovarajucu porukicu: 200 OK, 201 Created, 400 Bad Request, 
    404 Not Found, 500 Server Error, ...  
    */
    header("HTTP/1.1 200 OK");

    /* CORS zaglavlja odgovora. */
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST");
    header("Access-Control-Allow-Headers: test-header");

    /* Informacija o formatu tela odgovora. */
    header("Content-Type: application/json; charset=UTF-8");

    /* 
    Telo ce sadrzati poruku 'Hello there' u JSON formatu {'message': 'Hello there'}.
    */
    $response = new stdClass();
    $response->message = "Hello there!";

    /* Svaka ispisana poruka je sastavni deo tela odgovora. */
    echo json_encode($response);

    /* 
    Materijal za citanje: 
    https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    https://www.codecademy.com/articles/what-is-cors

    */

?>