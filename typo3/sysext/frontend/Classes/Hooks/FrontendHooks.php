<?php
namespace TYPO3\CMS\Frontend\Hooks;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Uses frontend hooks to show preview informations
 */
class FrontendHooks
{
    /**
     * Include the preview block in case we're looking at a hidden page
     * in the LIVE workspace
     *
     * @param array $params
     * @param \TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController $pObj
     * @return string
     */
    public function hook_previewInfo($params, $pObj)
    {
        if ($pObj->fePreview !== 1) {
            return '';
        }
        if ($pObj->config['config']['message_preview']) {
            $message = $pObj->config['config']['message_preview'];
        } else {
            $message = '<div id="typo3-previewInfo" style="position: absolute; top: 0; border-bottom: 2px solid #ff8800; padding: 5px; background: #ffaa00; font: 1em Verdana; color: #fff; letter-spacing: 2px; z-index: 20000; width: 100%; text-align: center;"><span style="overflow: hidden; display: block; height: 16px;">... PREVIEW ... PREVIEW ... PREVIEW ... PREVIEW ... PREVIEW ... PREVIEW ... PREVIEW ... PREVIEW ... PREVIEW ... PREVIEW ... PREVIEW ... PREVIEW ... PREVIEW ... PREVIEW ... PREVIEW ... PREVIEW ... PREVIEW ... PREVIEW ... PREVIEW ... PREVIEW ... PREVIEW ... PREVIEW ... </span></div>';
        }
        return $message;
    }
}
