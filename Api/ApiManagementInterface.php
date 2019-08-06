<?php

namespace XCode\Api\Api;

interface ApiManagementInterface
{
    /**
     * get test Api data.
     *
     * @api
     *
     * @param mixed $session_data
     *
     * @return \XCode\Api\Api\Data\ApiInterface
     */
    public function login($session_data);

    /**
     * get test Api data.
     *
     * @api
     *
     * @param mixed $session_data
     *
     * @return \XCode\Api\Api\Data\ApiInterface
     */
    public function inquiry($session_data);
    /**
     * get test Api data.
     *
     * @api
     *
     * @param mixed $session_data
     *
     * @return \XCode\Api\Api\Data\ApiInterface
     */
    public function create_account($session_data);
    /**
     * get test Api data.
     *
     * @api
     *
     * @param mixed $session_data
     *
     * @return \XCode\Api\Api\Data\ApiInterface
     */
    public function confirm_code($session_data);
    /**
     * get test Api data.
     *
     * @api
     *
     * @param mixed $session_data
     *
     * @return \XCode\Api\Api\Data\ApiInterface
     */
    public function skip($session_data);
    /**
     * get test Api data.
     *
     * @api
     *
     * @param mixed $session_data
     *
     * @return \XCode\Api\Api\Data\ApiInterface
     */
    public function validate($session_data);
    /**
     * get test Api data.
     *
     * @api
     *
     * @param mixed $session_data
     *
     * @return \XCode\Api\Api\Data\ApiInterface
     */
    public function order_info($session_data);
     /**
     * get test Api data.
     *
     * @api
     *
     * @param mixed $session_data
     *
     * @return \XCode\Api\Api\Data\ApiInterface
     */
    public function change_state($session_data);
    /**
    * get test Api data.
    *
    * @api
    *
    * @param mixed $session_data
    *
    * @return \XCode\Api\Api\Data\ApiInterface
    */
    public function easy_check($session_data);
    /**
    * get test Api data.
    *
    * @api
    *
    * @param mixed $session_data
    *
    * @return \XCode\Api\Api\Data\ApiInterface
    */
}