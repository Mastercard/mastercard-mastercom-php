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
class ChargebacksDebitMasterCardAndEuropeDualAcquirer extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "ca1bfb7e-0005-404b-a66f-6c2fadcce407":
                return new OperationConfig("/mastercom/v6/chargebacks/debitmc/acknowledge", "update", array(), array());
            case "0a21c091-9b42-43d8-aa00-9c2e12a63362":
                return new OperationConfig("/mastercom/v6/claims/{claim-id}/chargebacks/debitmc", "create", array(), array());
            case "bf457479-9b39-4c5e-93fb-d5a0c1ae8b76":
                return new OperationConfig("/mastercom/v6/claims/{claim-id}/chargebacks/debitmc/{chargeback-id}/reversal", "create", array(), array());
            case "96647152-88e1-46f5-ba72-61e51b5b7c3a":
                return new OperationConfig("/mastercom/v6/claims/{claim-id}/chargebacks/debitmc/{chargeback-id}/documents", "query", array("format"), array());
            case "26cdde5c-2a94-491c-9708-d6be6092889b":
                return new OperationConfig("/mastercom/v6/chargebacks/debitmc/imagestatus", "update", array(), array());
            case "5addc04d-de10-47fc-8005-79a5e3392c83":
                return new OperationConfig("/mastercom/v6/chargebacks/debitmc/status", "update", array(), array());
            case "2b6cbe48-0ed5-4d67-a3c8-c982e9fad17f":
                return new OperationConfig("/mastercom/v6/claims/{claim-id}/chargebacks/debitmc/{chargeback-id}", "update", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }



    /**
     * Updates an object of type ChargebacksDebitMasterCardAndEuropeDualAcquirer
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return ChargebacksDebitMasterCardAndEuropeDualAcquirer of the response
     */
    public function acknowledgeReceivedChargebacks()  {
        return self::execute("ca1bfb7e-0005-404b-a66f-6c2fadcce407",$this);
    }




   /**
    * Creates object of type ChargebacksDebitMasterCardAndEuropeDualAcquirer
    *
    * @param Map map, containing the required parameters to create a new object
    * @return ChargebacksDebitMasterCardAndEuropeDualAcquirer of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("0a21c091-9b42-43d8-aa00-9c2e12a63362", new ChargebacksDebitMasterCardAndEuropeDualAcquirer($map));
    }





   /**
    * Creates object of type ChargebacksDebitMasterCardAndEuropeDualAcquirer
    *
    * @param Map map, containing the required parameters to create a new object
    * @return ChargebacksDebitMasterCardAndEuropeDualAcquirer of the response of created instance.
    */
    public static function createReversal($map)
    {
        return self::execute("bf457479-9b39-4c5e-93fb-d5a0c1ae8b76", new ChargebacksDebitMasterCardAndEuropeDualAcquirer($map));
    }










    /**
     * Query objects of type ChargebacksDebitMasterCardAndEuropeDualAcquirer by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return ChargebacksDebitMasterCardAndEuropeDualAcquirer of the response
     */
    public static function retrieveDocumentation($criteria)
    {
        return self::execute("96647152-88e1-46f5-ba72-61e51b5b7c3a",new ChargebacksDebitMasterCardAndEuropeDualAcquirer($criteria));
    }

    /**
     * Updates an object of type ChargebacksDebitMasterCardAndEuropeDualAcquirer
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return ChargebacksDebitMasterCardAndEuropeDualAcquirer of the response
     */
    public function chargebacksImageStatus()  {
        return self::execute("26cdde5c-2a94-491c-9708-d6be6092889b",$this);
    }





    /**
     * Updates an object of type ChargebacksDebitMasterCardAndEuropeDualAcquirer
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return ChargebacksDebitMasterCardAndEuropeDualAcquirer of the response
     */
    public function chargebacksStatus()  {
        return self::execute("5addc04d-de10-47fc-8005-79a5e3392c83",$this);
    }





    /**
     * Updates an object of type ChargebacksDebitMasterCardAndEuropeDualAcquirer
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return ChargebacksDebitMasterCardAndEuropeDualAcquirer of the response
     */
    public function update()  {
        return self::execute("2b6cbe48-0ed5-4d67-a3c8-c982e9fad17f",$this);
    }






}

