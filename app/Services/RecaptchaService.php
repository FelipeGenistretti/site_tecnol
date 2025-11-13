<!-- <?php

namespace App\Services;

use Google\Cloud\RecaptchaEnterprise\V1\Client\RecaptchaEnterpriseServiceClient;
use Google\Cloud\RecaptchaEnterprise\V1\Event;
use Google\Cloud\RecaptchaEnterprise\V1\Assessment;
use Google\Cloud\RecaptchaEnterprise\V1\CreateAssessmentRequest;
use Exception;

class RecaptchaService
{
    protected $siteKey;
    protected $projectId;

    public function __construct()
    {
        $this->siteKey = config('recaptcha.site_key'); 
        $this->projectId = config('recaptcha.project_id');
    }

    public function validateToken(string $token, string $action): float
    {
        $client = new RecaptchaEnterpriseServiceClient();
        $projectName = $client->projectName($this->projectId);

        $event = (new Event())
            ->setSiteKey($this->siteKey)
            ->setToken($token);

        $assessment = (new Assessment())->setEvent($event);
        $request = (new CreateAssessmentRequest())
            ->setParent($projectName)
            ->setAssessment($assessment);

        try {
            $response = $client->createAssessment($request);

            if (!$response->getTokenProperties()->getValid()) {
                throw new Exception('Token inválido: ' . $response->getTokenProperties()->getInvalidReason());
            }

            if ($response->getTokenProperties()->getAction() !== $action) {
                throw new Exception('Ação do token não corresponde à ação esperada.');
            }

            return $response->getRiskAnalysis()->getScore();
        } catch (Exception $e) {
            error_log($e->getMessage());
            return 0;
        }
    }
} -->
