<?php

    require_once 'assessment.php';
    require_once 'mailer.php';

    if (isset($_POST['contact-submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $captcha_response = $_POST['g-recaptcha-response'];

        if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
            if (empty($captcha_response)) {
                header("Location: ../../contact.php?error=captcha");
                exit();
            }
            echo "before assessment<br/>";
            $assessment = create_assessment(
                $captcha_response,
                'CONTACT'
            );

            echo "after assessment<br/>";
            if(!is_string($assessment) &&
                $assessment->getTokenProperties()->getValid() &&
                $assessment->getTokenProperties()->getAction() == "CONTACT" &&
                $assessment->getRiskAnalysis()->getScore() > 0.6) {
                $mail = send_contact_mail($name, $email, $subject, $message);

                if(is_bool(!$mail)) {
                    header("Location: ../../contact.php?message=sent");
                }
                else {
                    header("Location: ../../contact.php?error=$mail");
                }
            } else {
                header("Location: ../../contact.php?error=captcha");
            }
        } else {
            header("Location: ../../contact.php?error=empty-fields");
        }
    } else {
        header("Location: ../../contact.php");
    }