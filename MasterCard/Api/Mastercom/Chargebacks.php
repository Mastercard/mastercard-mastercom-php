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
            case "85ea54d3-a9e5-40c0-8591-182fc67c049c":
                return new OperationConfig("/mastercom/v2/chargebacks/acknowledge", "update", array(), array());
            case "7ed3fdca-388a-4112-b2dd-836914a4d4f3":
                return new OperationConfig("/mastercom/v2/claims/{claim-id}/chargebacks", "create", array(), array());
            case "9cd56e76-57d3-41e6-ac16-b3447df82ae0":
                return new OperationConfig("/mastercom/v2/claims/{claim-id}/chargebacks/{chargeback-id}/reversal", "create", array(), array());
            case "f7dd7844-794b-4e22-ade2-129451f03c3d":
                return new OperationConfig("/mastercom/v2/claims/{claim-id}/chargebacks/{chargeback-id}/documents", "query", array("format"), array());
            case "34fedef3-fa85-48b1-b660-ac919375e1d5":
                return new OperationConfig("/mastercom/v2/claims/{claim-id}/chargebacks/loaddataforchargebacks", "query", array("chargeback-type"), array());
            case "a2a99385-eba6-4625-a2ec-7b41cab4198d":
                return new OperationConfig("/mastercom/v2/chargebacks/status", "update", array(), array());
            case "e6ff88a0-2035-4e6b-a9f2-3410a6290f02":
                return new OperationConfig("/mastercom/v2/claims/{claim-id}/chargebacks/{chargeback-id}", "update", array(), array());
            
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
        return self::execute("85ea54d3-a9e5-40c0-8591-182fc67c049c",$this);
    }




   /**
    * Creates object of type Chargebacks
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Chargebacks of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("7ed3fdca-388a-4112-b2dd-836914a4d4f3", new Chargebacks($map));
    }





   /**
    * Creates object of type Chargebacks
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Chargebacks of the response of created instance.
    */
    public static function createReversal($map)
    {
        return self::execute("9cd56e76-57d3-41e6-ac16-b3447df82ae0", new Chargebacks($map));
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
        return self::execute("f7dd7844-794b-4e22-ade2-129451f03c3d",new Chargebacks($criteria));
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
    public static function getPossibleValueListsForCreate($criteria)
    {
        return self::execute("34fedef3-fa85-48b1-b660-ac919375e1d5",new Chargebacks($criteria));
    }

    /**
     * Updates an object of type Chargebacks
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Chargebacks of the response
     */
    public function chargebacksStatus()  {
        return self::execute("a2a99385-eba6-4625-a2ec-7b41cab4198d",$this);
    }





    /**
     * Updates an object of type Chargebacks
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Chargebacks of the response
     */
    public function update()  {
        return self::execute("e6ff88a0-2035-4e6b-a9f2-3410a6290f02",$this);
    }






}

