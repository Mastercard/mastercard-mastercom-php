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
            case "f313ed9d-545c-4648-81cd-d35acf0c7c3b":
                return new OperationConfig("/mastercom/v6/claims/{claim-id}/retrievalrequests/{request-id}/fulfillments", "create", array(), array());
            case "fe3d1c51-2985-4b7c-91ab-6e41d923dcd2":
                return new OperationConfig("/mastercom/v6/claims/{claim-id}/retrievalrequests", "create", array(), array());
            case "b6657ba4-664e-479b-9e8a-763e5f62302e":
                return new OperationConfig("/mastercom/v6/claims/{claim-id}/retrievalrequests/loaddataforretrievalrequests", "query", array(), array());
            case "9cc258b1-2952-40e9-8d56-56f5f2b01856":
                return new OperationConfig("/mastercom/v6/claims/{claim-id}/retrievalrequests/{request-id}/documents", "query", array("format"), array());
            case "efb8e6dc-61f2-4b2c-8394-587717e37a37":
                return new OperationConfig("/mastercom/v6/claims/{claim-id}/retrievalrequests/{request-id}/fulfillments/response", "create", array(), array());
            case "150c3730-e2c3-4490-9d28-46a808ee0d00":
                return new OperationConfig("/mastercom/v6/retrievalrequests/imagestatus", "update", array(), array());
            case "b8bc5fa1-0e8b-4a7a-a50e-c20dafcdc783":
                return new OperationConfig("/mastercom/v6/retrievalrequests/status", "update", array(), array());
            
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
        return self::execute("f313ed9d-545c-4648-81cd-d35acf0c7c3b", new Retrievals($map));
    }





   /**
    * Creates object of type Retrievals
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Retrievals of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("fe3d1c51-2985-4b7c-91ab-6e41d923dcd2", new Retrievals($map));
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
        return self::execute("b6657ba4-664e-479b-9e8a-763e5f62302e",new Retrievals($criteria));
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
        return self::execute("9cc258b1-2952-40e9-8d56-56f5f2b01856",new Retrievals($criteria));
    }
   /**
    * Creates object of type Retrievals
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Retrievals of the response of created instance.
    */
    public static function issuerRespondToFulfillment($map)
    {
        return self::execute("efb8e6dc-61f2-4b2c-8394-587717e37a37", new Retrievals($map));
    }






    /**
     * Updates an object of type Retrievals
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Retrievals of the response
     */
    public function retrievalFullfilmentImageStatus()  {
        return self::execute("150c3730-e2c3-4490-9d28-46a808ee0d00",$this);
    }





    /**
     * Updates an object of type Retrievals
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Retrievals of the response
     */
    public function retrievalFullfilmentStatus()  {
        return self::execute("b8bc5fa1-0e8b-4a7a-a50e-c20dafcdc783",$this);
    }






}

