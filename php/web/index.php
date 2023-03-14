<?php
$data ="";
$forms_data = [];
if ($_SERVER['REQUEST_URI'] === '/')
	$data="Hello World";
if ($_SERVER['REQUEST_URI'] === '/feedback') {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['feedback'];

        if (strpos($email, '@') === false) {
            echo 'O endereço de email não é válido.';
            $form_html = file_get_contents('form.html');
            echo $form_html;
        } else {
            $feedback = [
                'name' => $name,
                'email' => $email,
                'feedback' => $message,
            ];
            array_push($forms_data, $feedback);
            $data = "Seu feedback foi enviado com sucesso.";
        }

    }
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $form_html = file_get_contents('form.html');
        echo $form_html;
        //echo  $data;
    }

}elseif ($_SERVER['REQUEST_URI'] !== '/'){
    echo "ERROR 404 NOT FOUND";
}

echo $data;
