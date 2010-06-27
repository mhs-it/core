<?php
/**
 * Copyright Zikula Foundation 2009 - Zikula Application Framework
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license GNU/LGPLv3 (or at your option, any later version).
 * @package Zikula
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

/**
 * SwiftMailer plugin definition.
 */
class SystemPlugin_SwiftMailer_Plugin extends Zikula_Plugin
{
    /**
     * Get plugin meta data.
     *
     * @return array Meta data.
     */
    protected function getMeta()
    {
        return array('displayname' => $this->__('SwiftMailer Plugin'),
                     'description' => $this->__('Provides Swift Mailer.'),
                     'version'     => '4.0.6'
                      );
    }

    /**
     * Initialise.
     *
     * Runs ar plugin init time.
     *
     * @return void
     */
    public function initialize()
    {
        // register namespace
        ZLoader::addAutoloader('Swift', dirname(__FILE__) . '/lib/vendor/SwiftMailer/classes');

        // initialize Swift
        require_once realpath($this->baseDir . '/lib/vendor/SwiftMailer/swift_init.php');
    }
}
