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
class Retrievals extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "be821e35-7967-4217-bb9e-ab568e9ef873":
                return new OperationConfig("/mastercom/v4/claims/{claim-id}/retrievalrequests/{request-id}/fulfillments", "create", array(), array());
            case "8c0643b0-505e-4cbf-8c4b-f4f636d52bfd":
                return new OperationConfig("/mastercom/v4/claims/{claim-id}/retrievalrequests", "create", array(), array());
            case "1c310df2-4680-49f8-9075-cde2594a2c3b":
                return new OperationConfig("/mastercom/v4/claims/{claim-id}/retrievalrequests/loaddataforretrievalrequests", "query", array(), array());
            case "5d138da1-2323-4921-a82c-60f4943268a1":
                return new OperationConfig("/mastercom/v4/claims/{claim-id}/retrievalrequests/{request-id}/documents", "query", array("format"), array());
            case "4910f0b7-90ee-413c-86f8-2ed9a69ff60d":
                return new OperationConfig("/mastercom/v4/claims/{claim-id}/retrievalrequests/{request-id}/fulfillments/response", "create", array(), array());
            case "ca4b19ae-9c5f-48e9-84b0-a1fc798bfe87":
                return new OperationConfig("/mastercom/v4/retrievalrequests/imagestatus", "update", array(), array());
            case "c751c6db-3957-4e8a-a308-baa1db95e6d6":
                return new OperationConfig("/mastercom/v4/retrievalrequests/status", "update", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }


   /**
    * Creates object of type Retrievals
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Retrievals of the response of created instance.
    */
    public static function acquirerFulfillARequest($map)
    {
        return self::execute("be821e35-7967-4217-bb9e-ab568e9ef873", new Retrievals($map));
    }





   /**
    * Creates object of type Retrievals
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Retrievals of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("8c0643b0-505e-4cbf-8c4b-f4f636d52bfd", new Retrievals($map));
    }










    /**
     * Query objects of type Retrievals by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Retrievals of the response
     */
    public static function getPossibleValueListsForCreate($criteria)
    {
        return self::execute("1c310df2-4680-49f8-9075-cde2594a2c3b",new Retrievals($criteria));
    }





    /**
     * Query objects of type Retrievals by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Retrievals of the response
     */
    public static function getDocumentation($criteria)
    {
        return self::execute("5d138da1-2323-4921-a82c-60f4943268a1",new Retrievals($criteria));
    }
   /**
    * Creates object of type Retrievals
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Retrievals of the response of created instance.
    */
    public static function issuerRespondToFulfillment($map)
    {
        return self::execute("4910f0b7-90ee-413c-86f8-2ed9a69ff60d", new Retrievals($map));
    }






    /**
     * Updates an object of type Retrievals
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Retrievals of the response
     */
    public function retrievalFullfilmentImageStatus()  {
        return self::execute("ca4b19ae-9c5f-48e9-84b0-a1fc798bfe87",$this);
    }





    /**
     * Updates an object of type Retrievals
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Retrievals of the response
     */
    public function retrievalFullfilmentStatus()  {
        return self::execute("c751c6db-3957-4e8a-a308-baa1db95e6d6",$this);
    }






}

