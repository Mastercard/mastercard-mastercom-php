<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of
 * conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its
 * contributors may be used to endorse or promote products derived from this software
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 */

 namespace MasterCard\Api\Mastercom;

 use MasterCard\Core\Model\BaseObject;
 use MasterCard\Core\Model\RequestMap;
 use MasterCard\Core\Model\OperationMetadata;
 use MasterCard\Core\Model\OperationConfig;


/**
 * 
 */
class Queues extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "c0e2783b-7815-47b1-9bfb-2bc4be53c204":
                return new OperationConfig("/mastercom/v6/queues", "list", array("queue-name"), array());
            case "3ce3cecc-182e-4ccb-bf1a-803267932180":
                return new OperationConfig("/mastercom/v6/queues", "create", array(), array());
            case "7eaa714e-f5ed-4d15-a185-1628d828ff14":
                return new OperationConfig("/mastercom/v6/queues/names", "list", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }




    /**
     * List objects of type Queues
     *
     * @param Map criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Array of Queues object matching the criteria.
     */
    public static function retrieveClaimsFromQueue($criteria = null)
    {
        if ($criteria == null) {
            return self::execute("c0e2783b-7815-47b1-9bfb-2bc4be53c204",new Queues());
        } else {
            return self::execute("c0e2783b-7815-47b1-9bfb-2bc4be53c204",new Queues($criteria));
        }

    }



   /**
    * Creates object of type Queues
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Queues of the response of created instance.
    */
    public static function retrieveClaimsFromQueueWithDateInterval($map)
    {
        return self::execute("3ce3cecc-182e-4ccb-bf1a-803267932180", new Queues($map));
    }







    /**
     * List objects of type Queues
     *
     * @param Map criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Array of Queues object matching the criteria.
     */
    public static function retrieveQueueNames($criteria = null)
    {
        if ($criteria == null) {
            return self::execute("7eaa714e-f5ed-4d15-a185-1628d828ff14",new Queues());
        } else {
            return self::execute("7eaa714e-f5ed-4d15-a185-1628d828ff14",new Queues($criteria));
        }

    }





}

