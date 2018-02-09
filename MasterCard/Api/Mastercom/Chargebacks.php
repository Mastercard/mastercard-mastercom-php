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
			case "3e5a8b3f-3bd5-42b6-ba83-a38033bebfca":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/chargebacks", "create", array(), array());
			case "7df9988f-4b4a-4c47-8f81-c8d64d2be225":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/chargebacks/{chargeback-id}/reversal", "create", array(), array());
			case "e1999785-92c6-4b2f-bd0d-47dacdb33a42":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/chargebacks/{chargeback-id}/documents", "query", array("chargeback-type","format"), array());
			case "cfb2db9f-5b18-4f60-a517-4fe760657f9b":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}/chargebacks/loaddataforchargebacks", "query", array(), array());
			case "390585bb-30b0-47df-a14e-12b1684eb8e6":
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
		return self::execute("3e5a8b3f-3bd5-42b6-ba83-a38033bebfca", new Chargebacks($map));
	}





   /**
	* Creates object of type Chargebacks
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Chargebacks of the response of created instance.
	*/
	public static function createReversal($map)
	{
		return self::execute("7df9988f-4b4a-4c47-8f81-c8d64d2be225", new Chargebacks($map));
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
		return self::execute("e1999785-92c6-4b2f-bd0d-47dacdb33a42",new Chargebacks($criteria));
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
		return self::execute("cfb2db9f-5b18-4f60-a517-4fe760657f9b",new Chargebacks($criteria));
	}

	/**
	 * Updates an object of type Chargebacks
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Chargebacks of the response
	 */
	public function update()  {
		return self::execute("390585bb-30b0-47df-a14e-12b1684eb8e6",$this);
	}






}

