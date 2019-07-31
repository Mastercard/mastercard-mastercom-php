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
class Chargebacks extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "246c4403-ffe2-411b-8456-613c2bea4d1c":
                return new OperationConfig("/mastercom/v5/chargebacks/acknowledge", "update", array(), array());
            case "31004c9d-9e52-42c6-a687-0ed03e2b4c14":
                return new OperationConfig("/mastercom/v5/claims/{claim-id}/chargebacks", "create", array(), array());
            case "5babb55d-71d5-438d-beec-9cde447eb88f":
                return new OperationConfig("/mastercom/v5/claims/{claim-id}/chargebacks/{chargeback-id}/reversal", "create", array(), array());
            case "5d21b8cc-a724-44c6-a143-35efd952918e":
                return new OperationConfig("/mastercom/v5/claims/{claim-id}/chargebacks/{chargeback-id}/documents", "query", array("format"), array());
            case "202ecd11-cb06-4762-a191-b302f336aa4c":
                return new OperationConfig("/mastercom/v5/claims/{claim-id}/chargebacks/loaddataforchargebacks", "create", array(), array());
            case "e52c14c5-0570-484a-9977-17b3a271f1ec":
                return new OperationConfig("/mastercom/v5/chargebacks/imagestatus", "update", array(), array());
            case "c3156ae4-e448-4e9e-8b3a-654c34d8577b":
                return new OperationConfig("/mastercom/v5/chargebacks/status", "update", array(), array());
            case "c626dabd-f019-459d-bca5-97a993f24310":
                return new OperationConfig("/mastercom/v5/claims/{claim-id}/chargebacks/{chargeback-id}", "update", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }



    /**
     * Updates an object of type Chargebacks
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Chargebacks of the response
     */
    public function acknowledgeReceivedChargebacks()  {
        return self::execute("246c4403-ffe2-411b-8456-613c2bea4d1c",$this);
    }




   /**
    * Creates object of type Chargebacks
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Chargebacks of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("31004c9d-9e52-42c6-a687-0ed03e2b4c14", new Chargebacks($map));
    }





   /**
    * Creates object of type Chargebacks
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Chargebacks of the response of created instance.
    */
    public static function createReversal($map)
    {
        return self::execute("5babb55d-71d5-438d-beec-9cde447eb88f", new Chargebacks($map));
    }










    /**
     * Query objects of type Chargebacks by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Chargebacks of the response
     */
    public static function retrieveDocumentation($criteria)
    {
        return self::execute("5d21b8cc-a724-44c6-a143-35efd952918e",new Chargebacks($criteria));
    }
   /**
    * Creates object of type Chargebacks
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Chargebacks of the response of created instance.
    */
    public static function getPossibleValueListsForCreate($map)
    {
        return self::execute("202ecd11-cb06-4762-a191-b302f336aa4c", new Chargebacks($map));
    }






    /**
     * Updates an object of type Chargebacks
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Chargebacks of the response
     */
    public function chargebacksImageStatus()  {
        return self::execute("e52c14c5-0570-484a-9977-17b3a271f1ec",$this);
    }





    /**
     * Updates an object of type Chargebacks
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Chargebacks of the response
     */
    public function chargebacksStatus()  {
        return self::execute("c3156ae4-e448-4e9e-8b3a-654c34d8577b",$this);
    }





    /**
     * Updates an object of type Chargebacks
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Chargebacks of the response
     */
    public function update()  {
        return self::execute("c626dabd-f019-459d-bca5-97a993f24310",$this);
    }






}

