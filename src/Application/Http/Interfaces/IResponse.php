<?php

namespace Domain\Driven\Design\Application\Http\Interfaces;
/**
 * Class IResponse
 * needed method to be implemented in every resource
 * @package Domain\Driven\Design\Application\Interfaces
 */

interface IResponse
{

    /**
     * set http response as bad request
     * @param int $status_code
     * @param string $message
     * @return mixed
     */
    public function badRequest(int $status_code , string $message);


    /**
     * @param int $status_code
     * @param string $message
     * @return mixed
     */
    public function invalidArgument(int $status_code, string $message);

    /**
     * set response to success 200 with
     * @param int $status_code
     * @param string $message
     * @return mixed
     */
    public function success(int $status_code, string $message);


    /**
     * @param int $status_code
     * @param string $message
     * @return mixed
     */
    public function unAuthorized(int $status_code, string $message);


}