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
            case "17ef00f1-4362-403e-9eab-96d149a679a2":
                return new OperationConfig("/mastercom/v6/chargebacks/acknowledge", "update", array(), array());
            case "d0780efa-ee78-47bf-af64-a450f614e399":
                return new OperationConfig("/mastercom/v6/claims/{claim-id}/chargebacks", "create", array(), array());
            case "d59c882c-b4ff-4049-9363-26240710f2bd":
                return new OperationConfig("/mastercom/v6/claims/{claim-id}/chargebacks/{chargeback-id}/reversal", "create", array(), array());
            case "ca8dc0e1-148e-43ac-981e-2b647a6b10cf":
                return new OperationConfig("/mastercom/v6/claims/{claim-id}/chargebacks/{chargeback-id}/documents", "query", array("format"), array());
            case "4c932335-b6b3-4a92-85f0-cb8146ffaa0b":
                return new OperationConfig("/mastercom/v6/claims/{claim-id}/chargebacks/loaddataforchargebacks", "create", array(), array());
            case "bd3508b2-c31d-40c6-8910-efdb85905e37":
                return new OperationConfig("/mastercom/v6/chargebacks/imagestatus", "update", array(), array());
            case "e45dc91d-ab5a-464f-a0c4-3914f6b8ced7":
                return new OperationConfig("/mastercom/v6/chargebacks/status", "update", array(), array());
            case "7286e749-8c06-437d-b4f8-5beb22f49f01":
                return new OperationConfig("/mastercom/v6/claims/{claim-id}/chargebacks/{chargeback-id}", "update", array(), array());
            
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
        return self::execute("17ef00f1-4362-403e-9eab-96d149a679a2",$this);
    }




   /**
    * Creates object of type Chargebacks
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Chargebacks of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("d0780efa-ee78-47bf-af64-a450f614e399", new Chargebacks($map));
    }





   /**
    * Creates object of type Chargebacks
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Chargebacks of the response of created instance.
    */
    public static function createReversal($map)
    {
        return self::execute("d59c882c-b4ff-4049-9363-26240710f2bd", new Chargebacks($map));
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
        return self::execute("ca8dc0e1-148e-43ac-981e-2b647a6b10cf",new Chargebacks($criteria));
    }
   /**
    * Creates object of type Chargebacks
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Chargebacks of the response of created instance.
    */
    public static function getPossibleValueListsForCreate($map)
    {
        return self::execute("4c932335-b6b3-4a92-85f0-cb8146ffaa0b", new Chargebacks($map));
    }






    /**
     * Updates an object of type Chargebacks
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Chargebacks of the response
     */
    public function chargebacksImageStatus()  {
        return self::execute("bd3508b2-c31d-40c6-8910-efdb85905e37",$this);
    }





    /**
     * Updates an object of type Chargebacks
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Chargebacks of the response
     */
    public function chargebacksStatus()  {
        return self::execute("e45dc91d-ab5a-464f-a0c4-3914f6b8ced7",$this);
    }





    /**
     * Updates an object of type Chargebacks
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Chargebacks of the response
     */
    public function update()  {
        return self::execute("7286e749-8c06-437d-b4f8-5beb22f49f01",$this);
    }






}

