<?php

namespace tests\codeception\kpi\_pages;

use \yii\codeception\BasePage;

/**
 * Represents signup page
 * @property \codeception_kpi\AcceptanceTester|\codeception_kpi\FunctionalTester $actor
 */
class SignupPage extends BasePage
{

    public $route = 'site/signup';

    /**
     * @param array $signupData
     */
    public function submit(array $signupData)
    {
        foreach ($signupData as $field => $value) {
            $inputType = $field === 'body' ? 'textarea' : 'input';
            $this->actor->fillField($inputType . '[name="SignupForm[' . $field . ']"]', $value);
        }
        $this->actor->click('signup-button');
    }
}
