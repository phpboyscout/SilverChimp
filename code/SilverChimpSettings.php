<?php
/**
 * SilverChimp settings Container
 * @author Matt Cockayne <matt@zucchi.co.uk>
 * @package SilverChimp
 */
class SilverChimpSettings {

    /**
     * the MailChimp API Key to use
     * 
     * @var string
     */
    public static $api_key = null;
    
    /**
     * Shoud a secure connectoin be used when communicating 
     * with MailChimp
     * 
     * @var boolean
     */
    public static $secure_connection = false;
    
    /**
     * email type preference for the email (html, text, 
     * or mobile defaults to html)
     * 
     * @var string
     */
    public static $email_type = 'html';
    
    /**
     * flag to control whether a double opt-in confirmation 
     * message is sent, defaults to true.
     * 
     * @var boolean
     */
    public static $double_opt_in = false;
    
    /**
     * if your double_optin is false and this is true, we will 
     * send your lists Welcome Email if this subscribe succeeds 
     * - this will *not* fire if we end up updating an existing 
     * subscriber. If double_optin is true, this has no effect.
     * 
     * @var boolean
     */
    public static $send_welcome = false;
    
    /**
     * flag to control whether a existing subscribers should be updated 
     * instead of throwing and error, defaults to false
     * 
     * @var boolean
     */
    public static $update_existing = false;
   
    /**
     * flag to determine whether we replace the interest groups with 
     * the groups provided, or we add the provided groups to the 
     * member's interest groups, defaults to false
     * 
     * @var boolean
     */
    public static $replace_groups = false;
}