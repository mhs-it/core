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
 * Get field marker.
 *
 * Available parameters:
 *   - assign:   If set, the results are assigned to the corresponding variable instead of printed out
 *   - field:    The field for which we wish to get the field marker
 *   - validationErrors: the validation errors
 *
 * @param array  $params  All attributes passed to this function from the template.
 * @param Smarty &$smarty Reference to the Smarty object.
 *
 * @return string
 */
function smarty_function_formutil_getfieldmarker($params, &$smarty)
{
    // allow empty validation info -> return nothing
    if (!isset($params['validation'])) {
        return '';
    }

    $marker = FormUtil::getFieldMarker($params['objectType'], $params['validation'], $params['field']);

    if (isset($params['assign'])) {
        $smarty->assign($params['assign'], $marker);
    } else {
        return $marker;
    }
}
