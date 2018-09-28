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
            case "af9d22bc-5c8e-41f0-a6b9-4c0e733b0748":
                return new OperationConfig("/mastercom/v3/chargebacks/acknowledge", "update", array(), array());
            case "a30d871a-978a-4867-a496-32115af04165":
                return new OperationConfig("/mastercom/v3/claims/{claim-id}/chargebacks", "create", array(), array());
            case "f6465134-ae37-4701-b1ee-547c2c8e9f7e":
                return new OperationConfig("/mastercom/v3/claims/{claim-id}/chargebacks/{chargeback-id}/reversal", "create", array(), array());
            case "0ada72de-e3fa-4b3a-9571-6012e5c6bac0":
                return new OperationConfig("/mastercom/v3/claims/{claim-id}/chargebacks/{chargeback-id}/documents", "query", array("format"), array());
            case "5f3ddce4-bcae-4791-9039-43f1878c4214":
                return new OperationConfig("/mastercom/v3/claims/{claim-id}/chargebacks/loaddataforchargebacks", "create", array(), array());
            case "9f3c1fdb-7213-451f-9dd9-7da801784e54":
                return new OperationConfig("/mastercom/v3/chargebacks/status", "update", array(), array());
            case "bb5a4896-75f8-4ed7-aa74-5cb76232abcc":
                return new OperationConfig("/mastercom/v3/claims/{claim-id}/chargebacks/{chargeback-id}", "update", array(), array());
            
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
        return self::execute("af9d22bc-5c8e-41f0-a6b9-4c0e733b0748",$this);
    }




   /**
    * Creates object of type Chargebacks
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Chargebacks of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("a30d871a-978a-4867-a496-32115af04165", new Chargebacks($map));
    }





   /**
    * Creates object of type Chargebacks
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Chargebacks of the response of created instance.
    */
    public static function createReversal($map)
    {
        return self::execute("f6465134-ae37-4701-b1ee-547c2c8e9f7e", new Chargebacks($map));
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
        return self::execute("0ada72de-e3fa-4b3a-9571-6012e5c6bac0",new Chargebacks($criteria));
    }
   /**
    * Creates object of type Chargebacks
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Chargebacks of the response of created instance.
    */
    public static function getPossibleValueListsForCreate($map)
    {
        return self::execute("5f3ddce4-bcae-4791-9039-43f1878c4214", new Chargebacks($map));
    }






    /**
     * Updates an object of type Chargebacks
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Chargebacks of the response
     */
    public function chargebacksStatus()  {
        return self::execute("9f3c1fdb-7213-451f-9dd9-7da801784e54",$this);
    }





    /**
     * Updates an object of type Chargebacks
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Chargebacks of the response
     */
    public function update()  {
        return self::execute("bb5a4896-75f8-4ed7-aa74-5cb76232abcc",$this);
    }






}

