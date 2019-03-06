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
            case "75018db9-d42a-478e-abaa-2483b3b53c20":
                return new OperationConfig("/mastercom/v4/chargebacks/acknowledge", "update", array(), array());
            case "8646df97-1903-4742-9df3-9fb9867f3693":
                return new OperationConfig("/mastercom/v4/claims/{claim-id}/chargebacks", "create", array(), array());
            case "f945d06a-f3c5-45fe-b7c0-07356d7fabf5":
                return new OperationConfig("/mastercom/v4/claims/{claim-id}/chargebacks/{chargeback-id}/reversal", "create", array(), array());
            case "ce3535cb-abcb-4374-b9e5-10bfdacbe02e":
                return new OperationConfig("/mastercom/v4/claims/{claim-id}/chargebacks/{chargeback-id}/documents", "query", array("format"), array());
            case "a2a37126-5e45-41f3-bcc2-a9986aa64ef3":
                return new OperationConfig("/mastercom/v4/claims/{claim-id}/chargebacks/loaddataforchargebacks", "create", array(), array());
            case "f5315693-2bd6-41bc-bfac-b2b0c74c6d2e":
                return new OperationConfig("/mastercom/v4/chargebacks/imagestatus", "update", array(), array());
            case "696f98b3-1307-460d-aeb5-b4eeda7c360f":
                return new OperationConfig("/mastercom/v4/chargebacks/status", "update", array(), array());
            case "af0e9921-77fe-4620-bd1e-fd17c15d0161":
                return new OperationConfig("/mastercom/v4/claims/{claim-id}/chargebacks/{chargeback-id}", "update", array(), array());
            
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
        return self::execute("75018db9-d42a-478e-abaa-2483b3b53c20",$this);
    }




   /**
    * Creates object of type Chargebacks
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Chargebacks of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("8646df97-1903-4742-9df3-9fb9867f3693", new Chargebacks($map));
    }





   /**
    * Creates object of type Chargebacks
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Chargebacks of the response of created instance.
    */
    public static function createReversal($map)
    {
        return self::execute("f945d06a-f3c5-45fe-b7c0-07356d7fabf5", new Chargebacks($map));
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
        return self::execute("ce3535cb-abcb-4374-b9e5-10bfdacbe02e",new Chargebacks($criteria));
    }
   /**
    * Creates object of type Chargebacks
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Chargebacks of the response of created instance.
    */
    public static function getPossibleValueListsForCreate($map)
    {
        return self::execute("a2a37126-5e45-41f3-bcc2-a9986aa64ef3", new Chargebacks($map));
    }






    /**
     * Updates an object of type Chargebacks
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Chargebacks of the response
     */
    public function chargebacksImageStatus()  {
        return self::execute("f5315693-2bd6-41bc-bfac-b2b0c74c6d2e",$this);
    }





    /**
     * Updates an object of type Chargebacks
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Chargebacks of the response
     */
    public function chargebacksStatus()  {
        return self::execute("696f98b3-1307-460d-aeb5-b4eeda7c360f",$this);
    }





    /**
     * Updates an object of type Chargebacks
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Chargebacks of the response
     */
    public function update()  {
        return self::execute("af0e9921-77fe-4620-bd1e-fd17c15d0161",$this);
    }






}

