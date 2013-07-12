<?php
/**
 * SilverChimpSiteConfig.php - (http://zucchi.co.uk) 
 *
 * @link      http://github.com/zucchi/{PROJECT_NAME} for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zucchi Limited. (http://zucchi.co.uk)
 * @license   http://zucchi.co.uk/legals/bsd-license New BSD License
 */
/**
 * CustomSiteConfig
 *
 * Description of class
 *
 * @author Matt Cockayne <matt@zucchi.co.uk>
 * @package SilverChimp
 * @subpackage
 * @category
 */
class SilverChimpSiteConfig extends DataExtension {

    private static $db = array(
        'ChimpApiKey' => 'Text',
        'ChimpSecureConnection' => 'Boolean',
        'ChimpEmailType' => "Enum('html,text', 'html')",
        'ChimpDoubleOptIn' => 'Boolean',
        'ChimpSendWelcome' => 'Boolean',
        'ChimpUpdateExisting' => 'Boolean',
        'ChimpReplaceGroups' => 'Boolean',
    );

    private static $defaults = array(
        'ChimpSecureConnection' => false,
        'ChimpEmailType' => "html",
        'ChimpDoubleOptIn' => true,
        'ChimpSendWelcome' => false,
        'ChimpUpdateExisting' => false,
        'ChimpReplaceGroups' => false,
    );



    public function updateCMSFields(FieldList $fields) {
        $fields->addFieldToTab("Root.SilverChimp", new TextField(
            'ChimpApiKey',
            _t('SilverChimp.APIKEY', 'API Key')
        ));

        $fields->addFieldToTab("Root.SilverChimp", new DropdownField(
            'ChimpEmailType',
            _t('SilverChimp.SENDEMAILAS','Send Emails As'),
            array(
                'html' => _t('SilverChimp.SENDTYPEHTML','HTML'),
                'text' => _t('SilverChimp.SENDTYPETEXT','Text'),
            )
        ));

        $fields->addFieldToTab("Root.SilverChimp", new CheckboxField(
            'ChimpSecureConnection',
            _t('SilverChimp.SECURECONNECTIONSETTING', 'Secure Connection')
        ));

        $fields->addFieldToTab("Root.SilverChimp", new CheckboxField(
            'ChimpDoubleOptIn',
            _t('SilverChimp.DOUBLEOPTINSETTING', 'Double Opt In')
        ));

        $fields->addFieldToTab("Root.SilverChimp", new CheckboxField(
            'ChimpSendWelcome',
            _t('SilverChimp.SENDWELCOMESETTING', 'Send Welcome')
        ));

        $fields->addFieldToTab("Root.SilverChimp", new CheckboxField(
            'ChimpUpdateExisting',
            _t('SilverChimp.UPDATEEXISTINGSETTING', 'Update Existing')
        ));

        $fields->addFieldToTab("Root.SilverChimp", new CheckboxField(
            'ChimpReplaceGroups',
            _t('SilverChimp.REPLACEGROUPSSETTING', 'Replace Groups')
        ));



    }
}