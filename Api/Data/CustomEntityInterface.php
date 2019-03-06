<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile\CustomEntity
 * @author    Aurelien FOUCRET <aurelien.foucret@smile.fr>
 * @copyright 2019 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */

namespace Smile\CustomEntity\Api\Data;

use Magento\Framework\DataObject\IdentityInterface;

/**
 * Custom entity interface.
 *
 * @api
 *
 * @category Smile
 * @package  Smile\CustomEntity
 * @author   Aurelien FOUCRET <aurelien.foucret@smile.fr>
 */
interface CustomEntityInterface extends \Smile\ScopedEav\Api\Data\EntityInterface, IdentityInterface
{
    /**
     * Entity code. Can be used as part of method name for entity processing.
     */
    const ENTITY = 'smile_custom_entity';

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Smile\CustomEntity\Api\Data\CustomEntityExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     *
     * @param \Smile\CustomEntity\Api\Data\CustomEntityExtensionInterface $extensionAttributes Extension attributes.
     * @return $this
     */
    public function setExtensionAttributes(\Smile\CustomEntity\Api\Data\CustomEntityExtensionInterface $extensionAttributes);
}
