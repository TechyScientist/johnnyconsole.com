<?php
    require_once "../../assessment.php";
    require_once "../../mailer.php";

    if(isset($_POST['cameroah-feedback-submit'])) {
        $name = $_POST['name'];
        $chapter = $_POST['chapter'];
        $feedback = $_POST['feedback'];
        $recaptcha_token = $_POST['g-recaptcha-response'];
        $assessment = create_assessment($recaptcha_token, "CONTACT");
        if (!is_string($assessment)) {
            if ($assessment->getTokenProperties()->getValid()) {
                if ($assessment->getTokenProperties()->getAction() == "CONTACT") {
                    if ($assessment->getRiskAnalysis()->getScore() > 0.6) {

                        $mail = send_feedback_mail($name, $chapter, $feedback);
                        
                        if(is_bool($mail)) {
                            header("Location: ../../../../cameroah/reviewers/index.php?feedback=sent");
                        }
                        else {
                            header("Location: ../../../../cameroah/reviewers/index.php?error=500 (Internal Server Error)&message=$mail");
                        }
                    } else {
                        header('Location: ../../../../cameroah/reviewers/index.php?error=406 (Not Acceptable)&message=reCaptcha Risk Score too low');
                    }
                } else {
                    header('Location: ../../../../cameroah/reviewers/index.php?error=406 (Not Acceptable)&message=Invalid reCaptcha Action');
                }
            } else {
                header('Location: ../../../../cameroah/reviewers/index.php?error=408 (Request Timeout)&message=The reCaptcha token is no longer valid');
            }
        } else {
            header("Location: ../../../../cameroah/reviewers/index.php?error=500 (reCaptcha Assessment Error)&message=$assessment");
        }
    } else {
        header('Location: ../../../../cameroah/reviewers/index.php?error=401 (Unauthorized)&message=You must use the feedback submission form to submit feedback');
    }
