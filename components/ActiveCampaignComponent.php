<?php

namespace app\components;

use ActiveCampaign;
use app\models\User;
use Yii;
use yii\base\Component;

class ActiveCampaignComponent extends Component
{
    /** @var string $API_KEY */
    public $API_KEY;

    /** @var string $API_URL */
    public $API_URL;

    /** @var ActiveCampaign $activeCampaign */
    public $activeCampaign;

    /** @var int $welcomeAutomationId*/
    public $welcomeAutomationId;

    /** @var int $welcomeAutomationId*/
    public $fundCompletionId;

    /** @var int $customAutomationId */
    public $customAutomationId;

    /**
     * Init component
     *
     * @throws \Exception
     */
    public function init()
    {
        $this->activeCampaign = new ActiveCampaign($this->API_URL, $this->API_KEY);
        parent::init();
    }

    /**
     * Send custom email
     *
     * @param User $user
     * @param string $subject
     * @param string $body
     * @return bool
     */
    public function sendCustomEmail(User $user, string $subject, string $body)
    {
        $contactId = $this->addContact($user, $subject, $body);

        if (!$contactId) {
            false;
        }

        return $this->sendMail($contactId, $this->customAutomationId);
    }

    /**
     * Send email with custom link on startup
     *
     * @param User $user
     * @param int $startupId
     * @return bool
     */
    public function sendWelcomeEmail(User $user)
    {
        $contactId = $this->addContact($user);

        if (!$contactId) {
            false;
        }

        return $this->sendMail($contactId, $this->welcomeAutomationId);
    }

    /**
     * Send email with fund application email on startup
     *
     * @param User $user
     * @param int $startupId
     * @return bool
     */
    public function sendFundApplicationEmail(User $user)
    {
        $contactId = $this->addFundContact($user);

        if (!$contactId) {
            false;
        }

        return $this->sendMail($contactId, $this->fundCompletionId);
    }

    /**
     * Add user email to mailchimp audience
     *
     * @param int $contactId
     * @param int $automationId
     * @return boolean
     */
    private function sendMail(int $contactId, int $automationId)
    {
        $result = $this->activeCampaign->api("automation/contact_add", [
            'contact_id' => $contactId,
            'automation' => $automationId
        ]);

        return $result->success;
    }

    /**
     * Add new contact to AC
     *
     * @param User $user
     * @param string $subject
     * @param string $body
     * @return mixed
     */
    private function addContact(User $user, string $subject = null, string $body = null)
    {
        $contact = [
            'email' => $user->email,
            'field[%USERNAME%,0]' => $user->first_name . ' '. $user->last_name,
            'phone' => $user->phone,
            'field[%LINK%,0]' => Yii::$app->urlManager->createAbsoluteUrl([
                '/contest',
                'uuid' => $user->uuid
            ]),
        ];

        if ($subject && $body) {
            $contact['field[%CUSTOM_SUBJECT%,0]'] = $subject;
            $contact['field[%CUSTOM_TEXT%,0]'] = $body;
        }

        $result = $this->activeCampaign->api("contact/sync", $contact);

        if ($result->success) {
            return $result->subscriber_id;
        }

        return false;
    }

    /**
     * Add new contact to AC
     *
     * @param User $user
     * @param string $subject
     * @param string $body
     * @return mixed
     */
    private function addFundContact(User $user)
    {
        $contact = [
            'email' => $user->email,
            'field[%USERNAME%,0]' => $user->first_name, //. ' '. $user->last_name,
            'phone' => $user->phone
        ];

        $result = $this->activeCampaign->api("contact/sync", $contact);

        if ($result->success) {
            return $result->subscriber_id;
        }

        return false;
    }
}
