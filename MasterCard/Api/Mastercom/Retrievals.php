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
			case "45a1be3e-9aa0-45a6-a068-2f795b37988b":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/retrievalrequests/{request-id}/fulfillments", "create", array(), array());
			case "378cb453-aecd-4214-bfcb-529fdaab0bb2":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/retrievalrequests", "create", array(), array());
			case "934513b6-f627-4be1-9992-d76e2a5db551":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/retrievalrequests/loaddataforretrievalrequests", "query", array(), array());
			case "048b90c1-7543-4a45-a570-667011498811":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/retrievalrequests/{request-id}/documents", "query", array("format"), array());
			case "3435f30f-71b0-44bf-a1a9-1fe9bae0b648":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/retrievalrequests/{request-id}/fulfillments/response", "create", array(), array());
			case "d896a1cb-80d0-4391-808d-4bf09ae218a0":
				return new OperationConfig("/mastercom/v1/retrievalrequests/status", "update", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
	}


   /**
	* Creates object of type Retrievals
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Retrievals of the response of created instance.
	*/
	public static function acquirerFulfillARequest($map)
	{
		return self::execute("45a1be3e-9aa0-45a6-a068-2f795b37988b", new Retrievals($map));
	}





   /**
	* Creates object of type Retrievals
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Retrievals of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("378cb453-aecd-4214-bfcb-529fdaab0bb2", new Retrievals($map));
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
		return self::execute("934513b6-f627-4be1-9992-d76e2a5db551",new Retrievals($criteria));
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
		return self::execute("048b90c1-7543-4a45-a570-667011498811",new Retrievals($criteria));
	}
   /**
	* Creates object of type Retrievals
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Retrievals of the response of created instance.
	*/
	public static function issuerRespondToFulfillment($map)
	{
		return self::execute("3435f30f-71b0-44bf-a1a9-1fe9bae0b648", new Retrievals($map));
	}






	/**
	 * Updates an object of type Retrievals
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Retrievals of the response
	 */
	public function retrievalFullfilmentStatus()  {
		return self::execute("d896a1cb-80d0-4391-808d-4bf09ae218a0",$this);
	}






}

