<?php

return [
    'errors' => [
        'pagecontent' => 'An error has occured when trying to load the page content.',
    ],
    'account' => [
        'title' => 'Account',
        'security' => [
            'title' => 'Security Settings',
            'description' => 'On this page you are able to adjust your security settings. You can set up a two-factor authentication device and you can see the devices you are logged into. You\'re also able to change your password.',
            '2fa' => [
                'title' => 'Two Factor Authentication',
                'description' => 'Activating two-factor authentication protects your account in the best possible way. When you are logged in with your email address and password, we ask you to fill in a 2FA code to verify that it is really you. More information can be found here.',
                'enabled' => '2FA is currently <b>enabled</b>',
                'disabled' => '2FA is currently <b>disabled</b>',
                'enable' => [
                    'openbutton' => 'Enable 2FA (TOTP)',
                    'title' => 'Activate Two Factor Authentication',
                    'description' => 'Scan the QR code below with a TOTP app on your phone. Examples of such apps are Google Authenticator, Authy and Aegis. Once you have scanned the QR code you can press Finish, 2FA is then successfully activated.',
                    'finish' => 'Finish',
                    'cancel' => 'Cancel',
                ],
                'recovery' => [
                    'openbutton' => 'Recovery Codes',
                    'title' => 'Recovery Codes',
                    'description' => 'Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.',
                    'regenerate' => 'Regenerate Recovery Codes',
                    'close' => 'Close',
                ],
                'disable' => [
                    'openbutton' => 'Disable 2FA',
                    'title' => 'Are you sure?',
                    'description' => 'Do you really want to disable Two Factor Authentication? Your account may be more vulnerable to attacks/hacks if you proceed.',
                    'proceed' => 'Proceed',
                    'cancel' => 'Cancel',
                ],
            ],
            'password' => [
                'title' => 'Change Password',
                'description' => 'You can change your password below. Do this by entering your current password and then your new password plus a confirmation of that. Then press save. Have you forgotten your current password? Please contact customer service or use the forgot password function when you\'re logged out.',
                'current' => 'Current Password',
                'new' => 'New Password',
                'confirm' => 'Confirm New Password',
                'save' => 'Save',
            ],
            'session' => [
                'title' => 'Active Sessions',
            ],
        ],
        'address' => [
            'title' => 'Address Details',
        ],
        'preferences' => [
            'title' => 'Preferences',
            'description' => 'Change the preferences for the '.config('app.name').' portal. You can choose your language or theme, for example.',
            'theme' => [
                'defaulttitle' => 'Default',
                'defaultdescription' => 'Follow your device\'s settings.',
                'darktitle' => 'Dark',
                'darkdescription' => 'Always display the portal in dark mode.',
                'lighttitle' => 'Light',
                'lightdescription' => 'Always display the portal in light mode.',
            ],
        ],
        'active' => 'Active',
        'pending' => 'Pending',
        'inactive' => 'Inactive',
    ],
];
