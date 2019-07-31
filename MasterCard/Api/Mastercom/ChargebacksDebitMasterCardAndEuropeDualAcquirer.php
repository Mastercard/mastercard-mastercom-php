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
            case "8996f052-7c62-4f9b-9ef8-179132600b36":
                return new OperationConfig("/mastercom/v5/chargebacks/debitmc/acknowledge", "update", array(), array());
            case "46c7947b-d837-40e8-b1c9-af5c3d31f5e7":
                return new OperationConfig("/mastercom/v5/claims/{claim-id}/chargebacks/debitmc", "create", array(), array());
            case "385fb071-afcc-4dd9-bbd0-6fbfd992a6fc":
                return new OperationConfig("/mastercom/v5/claims/{claim-id}/chargebacks/debitmc/{chargeback-id}/reversal", "create", array(), array());
            case "163a143c-28c7-46b5-bbce-bbe4e8381048":
                return new OperationConfig("/mastercom/v5/claims/{claim-id}/chargebacks/debitmc/{chargeback-id}/documents", "query", array("format"), array());
            case "046df1a7-11a7-4145-b069-cfac4ee5a3b6":
                return new OperationConfig("/mastercom/v5/chargebacks/debitmc/imagestatus", "update", array(), array());
            case "10657abb-601a-46cc-9cb5-fbb154354ddc":
                return new OperationConfig("/mastercom/v5/chargebacks/debitmc/status", "update", array(), array());
            case "512ca072-73e1-483b-84b6-c63736c0a28c":
                return new OperationConfig("/mastercom/v5/claims/{claim-id}/chargebacks/debitmc/{chargeback-id}", "update", array(), array());
            
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
        return self::execute("8996f052-7c62-4f9b-9ef8-179132600b36",$this);
    }




   /**
    * Creates object of type ChargebacksDebitMasterCardAndEuropeDualAcquirer
    *
    * @param Map map, containing the required parameters to create a new object
    * @return ChargebacksDebitMasterCardAndEuropeDualAcquirer of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("46c7947b-d837-40e8-b1c9-af5c3d31f5e7", new ChargebacksDebitMasterCardAndEuropeDualAcquirer($map));
    }





   /**
    * Creates object of type ChargebacksDebitMasterCardAndEuropeDualAcquirer
    *
    * @param Map map, containing the required parameters to create a new object
    * @return ChargebacksDebitMasterCardAndEuropeDualAcquirer of the response of created instance.
    */
    public static function createReversal($map)
    {
        return self::execute("385fb071-afcc-4dd9-bbd0-6fbfd992a6fc", new ChargebacksDebitMasterCardAndEuropeDualAcquirer($map));
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
        return self::execute("163a143c-28c7-46b5-bbce-bbe4e8381048",new ChargebacksDebitMasterCardAndEuropeDualAcquirer($criteria));
    }

    /**
     * Updates an object of type ChargebacksDebitMasterCardAndEuropeDualAcquirer
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return ChargebacksDebitMasterCardAndEuropeDualAcquirer of the response
     */
    public function chargebacksImageStatus()  {
        return self::execute("046df1a7-11a7-4145-b069-cfac4ee5a3b6",$this);
    }





    /**
     * Updates an object of type ChargebacksDebitMasterCardAndEuropeDualAcquirer
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return ChargebacksDebitMasterCardAndEuropeDualAcquirer of the response
     */
    public function chargebacksStatus()  {
        return self::execute("10657abb-601a-46cc-9cb5-fbb154354ddc",$this);
    }





    /**
     * Updates an object of type ChargebacksDebitMasterCardAndEuropeDualAcquirer
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return ChargebacksDebitMasterCardAndEuropeDualAcquirer of the response
     */
    public function update()  {
        return self::execute("512ca072-73e1-483b-84b6-c63736c0a28c",$this);
    }






}

