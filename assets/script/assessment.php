<?php
use Google\Cloud\RecaptchaEnterprise\V1\CreateAssessmentRequest;
use Google\Cloud\RecaptchaEnterprise\V1\Client\RecaptchaEnterpriseServiceClient;
use Google\Cloud\RecaptchaEnterprise\V1\Event;
use Google\Cloud\RecaptchaEnterprise\V1\Assessment;

require_once "vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable("../../");
$dotenv->load();

function create_assessment(string $token, string $action): Assessment|string {
    // Create the reCAPTCHA client.
    // TODO: Cache the client generation code (recommended) or call client.close() before exiting the method.
    $client = new RecaptchaEnterpriseServiceClient([
        "apiKey" => $_ENV["RECAPTCHA_SECRET_KEY"]
    ]);
    $projectName = $client->projectName($_ENV["RECAPTCHA_PROJECT"]);

    // Set the properties of the event to be tracked.
    $event = (new Event())->setExpectedAction($action)->setSiteKey($_ENV["RECAPTCHA_SITE_KEY"])->setToken($token);

    // Build the assessment request.
    $assessment = (new Assessment())->setEvent($event);

    try {
        return $client->createAssessment(CreateAssessmentRequest::build($projectName, $assessment));
    } catch (exception $e) {
        return $e->getMessage();
    }
}
