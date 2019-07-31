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
            case "ebe64d4b-925d-4a67-86f5-a69464b0fea3":
                return new OperationConfig("/mastercom/v5/claims/{claim-id}/retrievalrequests/debitmc/{request-id}/fulfillments", "create", array(), array());
            case "adf1a3ef-5d29-4f5e-a8ad-abfc6aa4ed9f":
                return new OperationConfig("/mastercom/v5/claims/{claim-id}/retrievalrequests/debitmc", "create", array(), array());
            case "cedf4f0d-b08d-4913-8338-66e4832d4837":
                return new OperationConfig("/mastercom/v5/claims/{claim-id}/retrievalrequests/debitmc/{request-id}/documents", "query", array("format"), array());
            case "f76d918d-be7c-402d-b73e-72d438e465f1":
                return new OperationConfig("/mastercom/v5/claims/{claim-id}/retrievalrequests/debitmc/{request-id}/fulfillments/response", "create", array(), array());
            case "111aaa36-c886-4b2f-ad39-fb159961bdce":
                return new OperationConfig("/mastercom/v5/retrievalrequests/debitmc/imagestatus", "update", array(), array());
            case "fb642a67-5cfe-4ce2-adfe-b52836cc176b":
                return new OperationConfig("/mastercom/v5/retrievalrequests/debitmc/status", "update", array(), array());
            
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
        return self::execute("ebe64d4b-925d-4a67-86f5-a69464b0fea3", new RetrievalsDebitMasterCardAndEuropeDualAcquirer($map));
    }





   /**
    * Creates object of type RetrievalsDebitMasterCardAndEuropeDualAcquirer
    *
    * @param Map map, containing the required parameters to create a new object
    * @return RetrievalsDebitMasterCardAndEuropeDualAcquirer of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("adf1a3ef-5d29-4f5e-a8ad-abfc6aa4ed9f", new RetrievalsDebitMasterCardAndEuropeDualAcquirer($map));
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
        return self::execute("cedf4f0d-b08d-4913-8338-66e4832d4837",new RetrievalsDebitMasterCardAndEuropeDualAcquirer($criteria));
    }
   /**
    * Creates object of type RetrievalsDebitMasterCardAndEuropeDualAcquirer
    *
    * @param Map map, containing the required parameters to create a new object
    * @return RetrievalsDebitMasterCardAndEuropeDualAcquirer of the response of created instance.
    */
    public static function issuerRespondToFulfillment($map)
    {
        return self::execute("f76d918d-be7c-402d-b73e-72d438e465f1", new RetrievalsDebitMasterCardAndEuropeDualAcquirer($map));
    }






    /**
     * Updates an object of type RetrievalsDebitMasterCardAndEuropeDualAcquirer
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return RetrievalsDebitMasterCardAndEuropeDualAcquirer of the response
     */
    public function retrievalFullfilmentImageStatus()  {
        return self::execute("111aaa36-c886-4b2f-ad39-fb159961bdce",$this);
    }





    /**
     * Updates an object of type RetrievalsDebitMasterCardAndEuropeDualAcquirer
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return RetrievalsDebitMasterCardAndEuropeDualAcquirer of the response
     */
    public function retrievalFullfilmentStatus()  {
        return self::execute("fb642a67-5cfe-4ce2-adfe-b52836cc176b",$this);
    }






}

