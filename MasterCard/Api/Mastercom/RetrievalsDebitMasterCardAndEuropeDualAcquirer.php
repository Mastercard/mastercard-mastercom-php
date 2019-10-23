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
class RetrievalsDebitMasterCardAndEuropeDualAcquirer extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "c9827ff6-864f-4028-89ca-297b5e78c63c":
                return new OperationConfig("/mastercom/v6/claims/{claim-id}/retrievalrequests/debitmc/{request-id}/fulfillments", "create", array(), array());
            case "2f930d35-a109-45fc-b78d-5cf863b56fee":
                return new OperationConfig("/mastercom/v6/claims/{claim-id}/retrievalrequests/debitmc", "create", array(), array());
            case "f1b2ea50-23f5-4c32-ad9e-302f10c2ac6a":
                return new OperationConfig("/mastercom/v6/claims/{claim-id}/retrievalrequests/debitmc/{request-id}/documents", "query", array("format"), array());
            case "52cbf17a-cc6a-4956-8bb6-a48c6f52795a":
                return new OperationConfig("/mastercom/v6/claims/{claim-id}/retrievalrequests/debitmc/{request-id}/fulfillments/response", "create", array(), array());
            case "8915fb9e-ea78-4684-a942-c6d229d7de53":
                return new OperationConfig("/mastercom/v6/retrievalrequests/debitmc/imagestatus", "update", array(), array());
            case "a971fff5-ad93-4e9d-aa72-1d37503c93fb":
                return new OperationConfig("/mastercom/v6/retrievalrequests/debitmc/status", "update", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }


   /**
    * Creates object of type RetrievalsDebitMasterCardAndEuropeDualAcquirer
    *
    * @param Map map, containing the required parameters to create a new object
    * @return RetrievalsDebitMasterCardAndEuropeDualAcquirer of the response of created instance.
    */
    public static function acquirerFulfillARequest($map)
    {
        return self::execute("c9827ff6-864f-4028-89ca-297b5e78c63c", new RetrievalsDebitMasterCardAndEuropeDualAcquirer($map));
    }





   /**
    * Creates object of type RetrievalsDebitMasterCardAndEuropeDualAcquirer
    *
    * @param Map map, containing the required parameters to create a new object
    * @return RetrievalsDebitMasterCardAndEuropeDualAcquirer of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("2f930d35-a109-45fc-b78d-5cf863b56fee", new RetrievalsDebitMasterCardAndEuropeDualAcquirer($map));
    }










    /**
     * Query objects of type RetrievalsDebitMasterCardAndEuropeDualAcquirer by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return RetrievalsDebitMasterCardAndEuropeDualAcquirer of the response
     */
    public static function getDocumentation($criteria)
    {
        return self::execute("f1b2ea50-23f5-4c32-ad9e-302f10c2ac6a",new RetrievalsDebitMasterCardAndEuropeDualAcquirer($criteria));
    }
   /**
    * Creates object of type RetrievalsDebitMasterCardAndEuropeDualAcquirer
    *
    * @param Map map, containing the required parameters to create a new object
    * @return RetrievalsDebitMasterCardAndEuropeDualAcquirer of the response of created instance.
    */
    public static function issuerRespondToFulfillment($map)
    {
        return self::execute("52cbf17a-cc6a-4956-8bb6-a48c6f52795a", new RetrievalsDebitMasterCardAndEuropeDualAcquirer($map));
    }






    /**
     * Updates an object of type RetrievalsDebitMasterCardAndEuropeDualAcquirer
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return RetrievalsDebitMasterCardAndEuropeDualAcquirer of the response
     */
    public function retrievalFullfilmentImageStatus()  {
        return self::execute("8915fb9e-ea78-4684-a942-c6d229d7de53",$this);
    }





    /**
     * Updates an object of type RetrievalsDebitMasterCardAndEuropeDualAcquirer
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return RetrievalsDebitMasterCardAndEuropeDualAcquirer of the response
     */
    public function retrievalFullfilmentStatus()  {
        return self::execute("a971fff5-ad93-4e9d-aa72-1d37503c93fb",$this);
    }






}

