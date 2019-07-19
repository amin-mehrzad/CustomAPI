<?php
/**
 * XCode Software.
 *
 * @category  XCode
 *
 * @author    XCode
 * @copyright Copyright (c) 2010-2016 XCode Software Private Limited (https://XCode.com)
 * @license   https://store.XCode.com/license.html
 */

namespace XCode\Api\Api\Data;

/**
 * Marketplace product interface.
 *
 * @api
 */
interface ApiInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ENTITY_ID = 'entity_id';

    const TITLE = 'title';

    const DESC = 'description';
    /**#@-*/

    /**
     * Get ID.
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set ID.
     *
     * @param int $id
     *
     * @return \XCode\Marketplace\Api\Data\ProductInterface
     */
    public function setId($id);

    /**
     * Get title.
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return \XCode\Marketplace\Api\Data\ProductInterface
     */
    public function setTitle($title);

    /**
     * Get desc.
     *
     * @return string|null
     */
    public function getDescription();

    /**
     * Set Desc.
     *
     * @param string $desc
     *
     * @return \XCode\Marketplace\Api\Data\ProductInterface
     */
    public function setDescription($desc);
}