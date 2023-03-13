<?php
$data ="";
$forms_data = [];
if ($_SERVER['REQUEST_URI'] === '/')
	$data="Hello World";
if ($_SERVER['REQUEST_URI'] === '/feedback') {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $message = $_POST['feedback'];
        $feedback = [
            'name' => $_POST['name'],
            'email' => $email,
            'feedback' => $message,
        ];
        echo $feedback['name']."\n<br>";
        echo $feedback['email']."\n<br>";
        echo $feedback['feedback']."\n<br>";
        array_push($forms_data, $feedback);
        $data = "Your feedback submitted successfully.";
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
