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
class Claims extends BaseObject {



	protected static function getOperationConfig($operationUUID) {
		switch ($operationUUID) {
			case "ad6697aa-5c37-445c-b161-18ab741ffbcc":
				return new OperationConfig("/mastercom/v1/claims", "create", array(), array());
			case "094937fe-25c7-495a-86dc-90d57781c03f":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}", "read", array(), array());
			case "be35c334-59b7-4f9d-a16f-0f50c2cde569":
				return new OperationConfig("/mastercom/v1/claims/{claim-id}", "update", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative());
	}


   /**
	* Creates object of type Claims
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Claims of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("ad6697aa-5c37-445c-b161-18ab741ffbcc", new Claims($map));
	}









	/**
	 * Returns objects of type Claims by id and optional criteria
	 * @param type $id
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Claims of the response
	 */
	public static function retrieve($id, $criteria = null)
	{
		$map = new RequestMap();
		if (!empty($id)) {
			$map->set("id", $id);
		}
		if ($criteria != null) {
			$map->setAll($criteria);
		}
		return self::execute("094937fe-25c7-495a-86dc-90d57781c03f",new Claims($map));
	}


	/**
	 * Updates an object of type Claims
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Claims of the response
	 */
	public function update()  {
		return self::execute("be35c334-59b7-4f9d-a16f-0f50c2cde569",$this);
	}






}

