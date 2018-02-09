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
			case "8a1bc3c1-ffea-4f84-a506-7b05d3b6158c":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/chargebacks", "create", array(), array());
			case "11e5e734-bd9c-484f-8344-e4ac85b33767":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/chargebacks/{chargeback-id}/reversal", "create", array(), array());
			case "bf6f5208-9a50-4264-920f-fecd97c3913d":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/chargebacks/{chargeback-id}/documents", "query", array("chargeback-type","format"), array());
			case "72b2cf05-1d9d-4d8c-9870-961a7a5fd51f":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/chargebacks/loaddataforchargebacks", "query", array(), array());
			case "9eb73b48-3f26-474f-b9fd-dd1681255c55":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/chargebacks/{chargeback-id}", "update", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative());
	}


   /**
	* Creates object of type Chargebacks
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Chargebacks of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("8a1bc3c1-ffea-4f84-a506-7b05d3b6158c", new Chargebacks($map));
	}





   /**
	* Creates object of type Chargebacks
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Chargebacks of the response of created instance.
	*/
	public static function createReversal($map)
	{
		return self::execute("11e5e734-bd9c-484f-8344-e4ac85b33767", new Chargebacks($map));
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
		return self::execute("bf6f5208-9a50-4264-920f-fecd97c3913d",new Chargebacks($criteria));
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
		return self::execute("72b2cf05-1d9d-4d8c-9870-961a7a5fd51f",new Chargebacks($criteria));
	}

	/**
	 * Updates an object of type Chargebacks
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Chargebacks of the response
	 */
	public function update()  {
		return self::execute("9eb73b48-3f26-474f-b9fd-dd1681255c55",$this);
	}






}

