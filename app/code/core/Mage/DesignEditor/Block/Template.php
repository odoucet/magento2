<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_DesignEditor
 * @copyright   Copyright (c) 2013 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Extended template block for Visual Design Editor
 *
 * @method string getElementName()
 * @method string getElementId()
 * @method string getElementTitle()
 * @method bool getIsManipulationAllowed()
 * @method bool getIsContainer()
 */
class Mage_DesignEditor_Block_Template extends Mage_Core_Block_Template
{
    /**
     * Path to template file in theme.
     *
     * @var string
     */
    protected $_template = 'wrapping.phtml';

    /**
     * Get remove button for block/container wrapper
     *
     * @param string $elementId
     * @return string
     */
    public function getRemoveButton($elementId)
    {
        /** @var $block Mage_DesignEditor_Block_Wrapper_Remove */
        $block = $this->getLayout()->createBlock('Mage_DesignEditor_Block_Wrapper_Remove', '',
            array(
                'data' => array(
                    'template'           => 'wrapper/remove.phtml',
                    'wrapped_element_id' => $elementId
                )
            )
        );
        return $block->toHtml();
    }
}
