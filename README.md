# SilverChimp - Simple MailChimp Integration for SilverStripe

## Introduction

A simple integration with MailChimp allowing you to create a Subscribe to newsletter page.

This was created to allow simple mailing list subscription and allowing you to utilise MailChimps own form/merge fields.

## Maintainer Contact

  * Matt Cockayne  
    <matt@zucchi.co.uk>
    
## Requirements

 * Silverstripe 3.1 or newer

## Installation

 * Copy the 'SilverChimp' directory into you main SilverStripe webroot
 * Add the line `SilverChimpSettings::$api_key = '<api-key>';` to mysite/_config.php. (replacing <api-key> with your own key)
 * trigger a build at /dev/build?flush=1
 
## Usage
 
 You should now be able to create a new "Silver Chimp Subscription Page". 
 On the "Chimp Settings" tab you can now select the list you wish to add the subscriber to.
 When selecting a list and saving you will be able to review the fields that have been set up in MailChimps own system on the "Chimp Fields" tab.
 Should you wish to manage the fields used for the mailing list you must do so from your MailChimp account.
  
## Todo

 * Add support for groups
 * Add widget
 * implement unsubscribe functionality
