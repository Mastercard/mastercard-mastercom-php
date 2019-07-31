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
class TransactionsDebitMasterCardAndEuropeDualAcquirer extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "202d2ad4-9dd9-47a2-90a0-272b3e66d444":
                return new OperationConfig("/mastercom/v5/{claim-id}/transactions/debitmc/detail", "query", array(), array());
            case "10579aee-23be-4b30-b1fb-755592fd587d":
                return new OperationConfig("/mastercom/v5/transactions/debitmc/search", "create", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }







    /**
     * Query objects of type TransactionsDebitMasterCardAndEuropeDualAcquirer by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return TransactionsDebitMasterCardAndEuropeDualAcquirer of the response
     */
    public static function retrieveDebitMCMessageDetail($criteria)
    {
        return self::execute("202d2ad4-9dd9-47a2-90a0-272b3e66d444",new TransactionsDebitMasterCardAndEuropeDualAcquirer($criteria));
    }
   /**
    * Creates object of type TransactionsDebitMasterCardAndEuropeDualAcquirer
    *
    * @param Map map, containing the required parameters to create a new object
    * @return TransactionsDebitMasterCardAndEuropeDualAcquirer of the response of created instance.
    */
    public static function searchForDebitMCMessageTransaction($map)
    {
        return self::execute("10579aee-23be-4b30-b1fb-755592fd587d", new TransactionsDebitMasterCardAndEuropeDualAcquirer($map));
    }







}

