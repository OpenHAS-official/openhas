<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'These credentials do not match our records.',
    'password' => 'The provided password is incorrect.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
    'login' => [
        'title' => 'Login',
        'fields' => [
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'passwordconfirmation' => 'Password Confirmation',
        ],
        'placeholder' => [
            'name' => 'Enter your full name',
            'email' => 'Enter your email',
            'password' => 'Enter your password',
            'passwordconfirmation' => 'Confirm your password',
            'forgotpassword' => 'Forgot your password?',
        ],
        'registertext' => 'Don\'t have an account yet?',
        'registerlink' => 'Register now',
        'rememberme' => 'Remember me',
        'submit' => 'Login',
    ],
    'register' => [
        'title' => 'Register',
        'personal' => 'Personal Details',
        'account' => 'Account Details',
        'address' => 'Address Information',
        'company' => 'Company Details',
        'companydisclaimer' => 'If you want to register as a private person, you can leave the fields below empty. If you are a company with an European VAT number, please fill in the desired field as well.',
        'step1' => 'Step 1',
        'step2' => 'Step 2',
        'step3' => 'Step 3',
        'step4' => 'Step 4',
        'fields' => [
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'phone' => 'Phone',
            'email' => 'Email',
            'password' => 'Password',
            'passwordconfirmation' => 'Password Confirmation',
            'address1' => 'Address 1',
            'address2' => 'Address 2',
            'postcode' => 'Postcode',
            'city' => 'City',
            'state_region' => 'State / Region',
            'country' => 'Country',
            'company' => 'Company Name',
            'vat' => 'VAT ID',
            'registration' => 'Registration Number',
        ],
        'placeholder' => [
            'firstname' => '',
            'lastname' => '',
            'phone' => '',
            'email' => '',
            'password' => '',
            'passwordconfirmation' => '',
            'address1' => 'House number and street name',
            'address2' => 'Apartment, suite, unit, etc.',
            'postcode' => '',
            'city' => '',
            'state_region' => '',
            'country' => 'Select your country',
            'company' => '',
            'vat' => 'European VAT ID',
            'registration' => 'Registration number at your local Chamber of Commerce',
        ],
        'logintext' => 'Already have an account?',
        'loginlink' => 'Login now',
        'submit' => 'Register',
        'next' => 'Next',
        'previous' => 'Previous',
    ],
    'forgotpassword' => [
        'title' => 'Forgot Password?',
        'help' => 'By filling in your email address below you can reset your password. If your email address matches an existing account you will receive a link in your inbox.',
        'email' => 'Email address',
        'submit' => 'Request new password',
        'goback' => 'Go back',
    ],
    'resetpassword' => [
        'title' => 'Reset Password',
        'help' => 'By filling in the form below you can reset your password. Please note that your password must contain at least 8 characters, including at least one upper case letter, lower case letter, number and special character.',
        'password' => 'New password',
        'passwordconfirmation' => 'Confirm new password',
        'submit' => 'Reset password',
    ],
    'verifyemail' => [
        'title' => 'Verify your email address',
        'help' => 'For security reasons, we ask you to confirm your email address. If you have not yet received an email from us with instructions, you can request a new one by clicking on the button below.',
        'submit' => 'Request new confirmation email',
        'success' => 'We\'ve send you a new confirmation email. Please check your SPAM folder if you have not received it.',
    ],
    'confirmpassword' => [
        'title' => 'Confirm your password',
        'help' => 'Please verify your password for this action.',
        'password' => 'Current password',
        'submit' => 'Verify password',
    ],
    'twofactor' => [
        'title' => 'Two Factor Authentication',
        'help' => 'You must provide the two-factor authentication code. In case you have lost the device where the codes were generated on, you can use a backup code or contact our customer service.',
        'code' => '2FA Code',
        'emergency' => 'Backup Code',
        'submit' => 'Login',
        'logincode' => 'Use a regular 2FA code',
        'loginrecovery' => 'Use a backup code',
    ],
    'error' => 'Error',
];
