<?php

namespace app\components;

use DrewM\MailChimp\MailChimp;
use yii\base\Component;

class MailchimpComponent extends Component
{
    public $API_KEY;
    public $mailChimp;
    public $listId;

    /**
     * Init component
     *
     * @throws \Exception
     */
    public function init()
    {
        $this->mailChimp = new MailChimp($this->API_KEY);
        parent::init();
    }

    /**
     * Add user email to mailchimp audience
     *
     * @param string $email
     * @return array|false
     */
    public function sendMail(string $email)
    {
        $result = $this->mailChimp->post("lists/$this->listId/members", [
            'email_address' => $email,
            'status' => 'subscribed',
        ]);

        if ($result['status'] == 'subscribed') {
            return [
                'status' => true,
                'message' => ''
            ];
        } else return [
            'status' => false,
            'message' => $result['detail']
        ];
    }
}
