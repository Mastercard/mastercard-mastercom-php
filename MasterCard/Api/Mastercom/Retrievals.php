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
            case "2c9744ee-6528-481d-b9a3-ca39744da03c":
                return new OperationConfig("/mastercom/v5/claims/{claim-id}/retrievalrequests/{request-id}/fulfillments", "create", array(), array());
            case "9af35d40-977e-4370-8e6f-464659dac7d8":
                return new OperationConfig("/mastercom/v5/claims/{claim-id}/retrievalrequests", "create", array(), array());
            case "b35a6472-29ff-4080-986d-d7ab027abbd6":
                return new OperationConfig("/mastercom/v5/claims/{claim-id}/retrievalrequests/loaddataforretrievalrequests", "query", array(), array());
            case "5af8d274-8dde-4698-99c0-68e8183afb21":
                return new OperationConfig("/mastercom/v5/claims/{claim-id}/retrievalrequests/{request-id}/documents", "query", array("format"), array());
            case "b0e88c9f-1a64-42a1-ac12-fa1abb972427":
                return new OperationConfig("/mastercom/v5/claims/{claim-id}/retrievalrequests/{request-id}/fulfillments/response", "create", array(), array());
            case "90682808-10d1-465d-a780-319d6df3ee5b":
                return new OperationConfig("/mastercom/v5/retrievalrequests/imagestatus", "update", array(), array());
            case "63b63272-7458-483b-9b05-a0c18e2d0ec4":
                return new OperationConfig("/mastercom/v5/retrievalrequests/status", "update", array(), array());
            
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
        return self::execute("2c9744ee-6528-481d-b9a3-ca39744da03c", new Retrievals($map));
    }





   /**
    * Creates object of type Retrievals
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Retrievals of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("9af35d40-977e-4370-8e6f-464659dac7d8", new Retrievals($map));
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
        return self::execute("b35a6472-29ff-4080-986d-d7ab027abbd6",new Retrievals($criteria));
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
        return self::execute("5af8d274-8dde-4698-99c0-68e8183afb21",new Retrievals($criteria));
    }
   /**
    * Creates object of type Retrievals
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Retrievals of the response of created instance.
    */
    public static function issuerRespondToFulfillment($map)
    {
        return self::execute("b0e88c9f-1a64-42a1-ac12-fa1abb972427", new Retrievals($map));
    }






    /**
     * Updates an object of type Retrievals
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Retrievals of the response
     */
    public function retrievalFullfilmentImageStatus()  {
        return self::execute("90682808-10d1-465d-a780-319d6df3ee5b",$this);
    }





    /**
     * Updates an object of type Retrievals
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Retrievals of the response
     */
    public function retrievalFullfilmentStatus()  {
        return self::execute("63b63272-7458-483b-9b05-a0c18e2d0ec4",$this);
    }






}

