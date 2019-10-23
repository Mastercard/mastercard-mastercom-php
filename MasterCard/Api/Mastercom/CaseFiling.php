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
class CaseFiling extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "7faf8180-c123-4274-b850-dfd50e6c1a13":
                return new OperationConfig("/mastercom/v6/cases", "create", array(), array());
            case "000e56a3-a09c-4ea7-bd2b-762e041503b6":
                return new OperationConfig("/mastercom/v6/cases/{case-id}/documents", "query", array("format","memo"), array());
            case "4b9e39cb-5999-4e3e-aa7f-9a2e6fe63055":
                return new OperationConfig("/mastercom/v6/cases/imagestatus", "update", array(), array());
            case "d0e6e6d8-41a0-470c-b32b-fe9503c19e3e":
                return new OperationConfig("/mastercom/v6/cases/status", "update", array(), array());
            case "a288a83e-be1e-4f04-98d7-b5f7b6949cb5":
                return new OperationConfig("/mastercom/v6/cases/retrieve/claims", "update", array(), array());
            case "6d2e2676-a18e-4889-95a6-b34d83ce071d":
                return new OperationConfig("/mastercom/v6/cases/{case-id}", "update", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }


   /**
    * Creates object of type CaseFiling
    *
    * @param Map map, containing the required parameters to create a new object
    * @return CaseFiling of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("7faf8180-c123-4274-b850-dfd50e6c1a13", new CaseFiling($map));
    }










    /**
     * Query objects of type CaseFiling by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return CaseFiling of the response
     */
    public static function retrieveDocumentation($criteria)
    {
        return self::execute("000e56a3-a09c-4ea7-bd2b-762e041503b6",new CaseFiling($criteria));
    }

    /**
     * Updates an object of type CaseFiling
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return CaseFiling of the response
     */
    public function caseFilingImageStatus()  {
        return self::execute("4b9e39cb-5999-4e3e-aa7f-9a2e6fe63055",$this);
    }





    /**
     * Updates an object of type CaseFiling
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return CaseFiling of the response
     */
    public function caseFilingStatus()  {
        return self::execute("d0e6e6d8-41a0-470c-b32b-fe9503c19e3e",$this);
    }





    /**
     * Updates an object of type CaseFiling
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return CaseFiling of the response
     */
    public function retrieve()  {
        return self::execute("a288a83e-be1e-4f04-98d7-b5f7b6949cb5",$this);
    }





    /**
     * Updates an object of type CaseFiling
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return CaseFiling of the response
     */
    public function update()  {
        return self::execute("6d2e2676-a18e-4889-95a6-b34d83ce071d",$this);
    }






}

