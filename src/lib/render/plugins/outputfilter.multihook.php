<?php
/**
 * Copyright Zikula Foundation 2009 - Zikula Application Framework
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license GNU/LGPLv3 (or at your option, any later version).
 * @package Render
 * @subpackage Template_Plugins
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

/**
 * Smarty outputfilter to add the invisible MultiHook divs just before the closing </body> tag.
 *
 * Security check is done in the MultiHook function called here.
 *
 * @param string $text    Output source.
 * @param Smarty &$smarty Reference to Smarty instance.
 *
 * @return string
 */
function smarty_outputfilter_multihook($text, &$smarty)
{
    $mhhelper = ModUtil::apiFunc('MultiHook', 'theme', 'helper');
    $mhhelper = $mhhelper . '</body>';
    $text = str_replace('</body>', $mhhelper, $text);

    // return the modified source
    return $text;
}
