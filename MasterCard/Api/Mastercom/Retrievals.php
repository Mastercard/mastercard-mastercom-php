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
class Retrievals extends BaseObject {



	protected static function getOperationConfig($operationUUID) {
		switch ($operationUUID) {
			case "3fb74af1-6ed7-4baf-8f38-514b048570f3":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/retrievalrequests/{request-id}/fulfillments", "create", array(), array());
			case "f8ffb7bf-fc99-44d6-a30d-65a131b23f51":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/retrievalrequests", "create", array(), array());
			case "851d5788-8793-4af5-942e-90d7b46c2ac7":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/retrievalrequests/loaddataforretrievalrequests", "query", array(), array());
			case "7af91f30-02f5-4e1d-8531-e08e526f056b":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/retrievalrequests/{request-id}/documents", "query", array("format"), array());
			case "b2f420f1-0be8-4cf7-8545-d62a0845a75d":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/retrievalrequests/{request-id}/fulfillments/response", "create", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative());
	}


   /**
	* Creates object of type Retrievals
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Retrievals of the response of created instance.
	*/
	public static function acquirerFulfillARequest($map)
	{
		return self::execute("3fb74af1-6ed7-4baf-8f38-514b048570f3", new Retrievals($map));
	}





   /**
	* Creates object of type Retrievals
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Retrievals of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("f8ffb7bf-fc99-44d6-a30d-65a131b23f51", new Retrievals($map));
	}










	/**
	 * Query objects of type Retrievals by id and optional criteria
	 *
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Retrievals of the response
	 */
	public static function getPossibleValueListsForCreate($criteria)
	{
		return self::execute("851d5788-8793-4af5-942e-90d7b46c2ac7",new Retrievals($criteria));
	}





	/**
	 * Query objects of type Retrievals by id and optional criteria
	 *
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Retrievals of the response
	 */
	public static function getDocumentation($criteria)
	{
		return self::execute("7af91f30-02f5-4e1d-8531-e08e526f056b",new Retrievals($criteria));
	}
   /**
	* Creates object of type Retrievals
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Retrievals of the response of created instance.
	*/
	public static function issuerRespondToFulfillment($map)
	{
		return self::execute("b2f420f1-0be8-4cf7-8545-d62a0845a75d", new Retrievals($map));
	}







}

