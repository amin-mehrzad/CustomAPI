<?php
/**
 * ValidAge Software.
 *
 * @category  ValidAge
 *
 * @author    ValidAge
 * @copyright Copyright (c) 2010-2016 ValidAge Software Private Limited (https://ValidAge.com)
 * @license   https://store.ValidAge.com/license.html
 */

namespace ValidAge\Api\Api\Data;

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
     * @return \ValidAge\Marketplace\Api\Data\ProductInterface
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
     * @return \ValidAge\Marketplace\Api\Data\ProductInterface
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
     * @return \ValidAge\Marketplace\Api\Data\ProductInterface
     */
    public function setDescription($desc);
}