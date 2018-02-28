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
			case "e885482e-e336-4a35-ac1a-1fadbac3c06d":
				return new OperationConfig("/mastercom/v1/chargebacks/acknowledge", "update", array(), array());
			case "13ae02d1-ee2d-450e-8ab9-ca3f44516ac8":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/chargebacks", "create", array(), array());
			case "1a029c69-d04b-4dc1-a857-c02e0ed859ec":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/chargebacks/{chargeback-id}/reversal", "create", array(), array());
			case "d2e7b6a5-d4e7-46d8-9d20-a05b35c4430f":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/chargebacks/{chargeback-id}/documents", "query", array("format"), array());
			case "80f22480-a361-46db-a700-b110d5bba9c8":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/chargebacks/loaddataforchargebacks", "query", array(), array());
			case "778b8136-8461-403c-afcf-9a27be4a3f3c":
				return new OperationConfig("/mastercom/v1/chargebacks/status", "update", array(), array());
			case "f492d24d-f366-4513-b2df-2290a551fbef":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/chargebacks/{chargeback-id}", "update", array(), array());
			
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
		return self::execute("e885482e-e336-4a35-ac1a-1fadbac3c06d",$this);
	}




   /**
	* Creates object of type Chargebacks
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Chargebacks of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("13ae02d1-ee2d-450e-8ab9-ca3f44516ac8", new Chargebacks($map));
	}





   /**
	* Creates object of type Chargebacks
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Chargebacks of the response of created instance.
	*/
	public static function createReversal($map)
	{
		return self::execute("1a029c69-d04b-4dc1-a857-c02e0ed859ec", new Chargebacks($map));
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
		return self::execute("d2e7b6a5-d4e7-46d8-9d20-a05b35c4430f",new Chargebacks($criteria));
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
		return self::execute("80f22480-a361-46db-a700-b110d5bba9c8",new Chargebacks($criteria));
	}

	/**
	 * Updates an object of type Chargebacks
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Chargebacks of the response
	 */
	public function chargebacksStatus()  {
		return self::execute("778b8136-8461-403c-afcf-9a27be4a3f3c",$this);
	}





	/**
	 * Updates an object of type Chargebacks
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Chargebacks of the response
	 */
	public function update()  {
		return self::execute("f492d24d-f366-4513-b2df-2290a551fbef",$this);
	}






}

