<?php
require __DIR__ . '/../../vendor/autoload.php';

use Respect\Validation\Validator;
use Respect\Validation\Exceptions\NestedValidationException;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $depart_date = trim($_POST['dateDeparture']);
    $return_date = trim($_POST['dateReturn']);
    $email = trim($_POST['email']);
    $reason = trim($_POST['reason']);

    $depart_validator = Validator::date()->notEmpty()->setName('Departure Date');
    $return_validator = Validator::date()->notEmpty()->between($depart_date, '2050-01-01')->setName('Return Date');
    $email_validator = Validator::email()->notEmpty()->setName('Email');
    $reason_validator = Validator::stringType()->length(1, 750)->setName('Reason For Travel');

    try {
        $depart_validator->assert($depart_date);
        $return_validator->assert($return_date);
        $email_validator->assert($email);
        $reason_validator->assert($reason);

        // TODO: Add to Database
    } catch (NestedValidationException $e) {
        echo "<ul>";
        foreach ($e->getMessages() as $message) {
            echo "<li>$message</li>";
        }
        echo "</ul>";
    }
}
