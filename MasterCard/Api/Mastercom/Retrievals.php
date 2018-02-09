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
			case "a38e5734-78b7-4c38-91c2-f28453b6cd54":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/retrievalrequests/{request-id}/fulfillments", "create", array(), array());
			case "28da1690-32c5-4a52-b281-614a9d2ccd0f":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/retrievalrequests", "create", array(), array());
			case "45d78e94-edc0-471c-a33b-d099bba6ad3b":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/retrievalrequests/loaddataforretrievalrequests", "query", array(), array());
			case "50f9d7f0-e1d7-484c-949b-de37d33cf444":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/retrievalrequests/{request-id}/documents", "query", array("format"), array());
			case "b42bb127-0e06-4f3b-9da7-48e0e245155f":
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
		return self::execute("a38e5734-78b7-4c38-91c2-f28453b6cd54", new Retrievals($map));
	}





   /**
	* Creates object of type Retrievals
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Retrievals of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("28da1690-32c5-4a52-b281-614a9d2ccd0f", new Retrievals($map));
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
		return self::execute("45d78e94-edc0-471c-a33b-d099bba6ad3b",new Retrievals($criteria));
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
		return self::execute("50f9d7f0-e1d7-484c-949b-de37d33cf444",new Retrievals($criteria));
	}
   /**
	* Creates object of type Retrievals
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Retrievals of the response of created instance.
	*/
	public static function issuerRespondToFulfillment($map)
	{
		return self::execute("b42bb127-0e06-4f3b-9da7-48e0e245155f", new Retrievals($map));
	}







}

