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
            case "83bbb7f7-3607-447d-8289-37d1a1d9f0cf":
                return new OperationConfig("/mastercom/v3/cases", "create", array(), array());
            case "76446f97-9d90-41cc-9fdf-0c5e4a206026":
                return new OperationConfig("/mastercom/v3/cases/{case-id}/documents", "query", array("format","memo"), array());
            case "cdfadef9-d27a-4354-969f-1cd53c5e726a":
                return new OperationConfig("/mastercom/v3/cases/status", "update", array(), array());
            case "ed1070a1-68bf-4da5-b4d2-7fc9ffeffb32":
                return new OperationConfig("/mastercom/v3/cases/{case-id}", "update", array(), array());
            
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
        return self::execute("83bbb7f7-3607-447d-8289-37d1a1d9f0cf", new CaseFiling($map));
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
        return self::execute("76446f97-9d90-41cc-9fdf-0c5e4a206026",new CaseFiling($criteria));
    }

    /**
     * Updates an object of type CaseFiling
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return CaseFiling of the response
     */
    public function caseFilingStatus()  {
        return self::execute("cdfadef9-d27a-4354-969f-1cd53c5e726a",$this);
    }





    /**
     * Updates an object of type CaseFiling
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return CaseFiling of the response
     */
    public function update()  {
        return self::execute("ed1070a1-68bf-4da5-b4d2-7fc9ffeffb32",$this);
    }






}

