<?php
	/**
	 * ApiException
	 * PHP version 5
	 *
	 * @author   Swagger Codegen team
	 * @link     https://github.com/swagger-api/swagger-codegen
	 * @category Class
	 * @package  MailchimpMarketing
	 */
	
	/**
	 * Mailchimp Marketing API
	 *
	 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
	 *
	 * OpenAPI spec version: 3.0.80
	 * Contact: apihelp@mailchimp.com
	 * Generated by: https://github.com/swagger-api/swagger-codegen.git
	 * Swagger Codegen version: 2.4.12
	 */
	
	/**
	 * NOTE: This class is auto generated by the swagger code generator program.
	 * https://github.com/swagger-api/swagger-codegen
	 * Do not edit the class manually.
	 */
	
	namespace MailchimpMarketing;
	
	use Exception;
	
	/**
	 * ApiException Class Doc Comment
	 *
	 * @author   Swagger Codegen team
	 * @link     https://github.com/swagger-api/swagger-codegen
	 * @category Class
	 * @package  MailchimpMarketing
	 */
	class ApiException extends Exception {
		/**
		 * The HTTP body of the server response either as Json or string.
		 *
		 * @var mixed
		 */
		protected mixed $responseBody;
		
		/**
		 * The HTTP header of the server response.
		 *
		 * @var string[]|null
		 */
		protected ?array $responseHeaders;
		
		/**
		 * The deserialized response object
		 *
		 * @var $responseObject ;
		 */
		protected mixed $responseObject;
		
		/**
		 * Constructor
		 *
		 * @param string        $message         Error message
		 * @param int           $code            HTTP status code
		 * @param string[]|null $responseHeaders HTTP response header
		 * @param null|mixed    $responseBody    HTTP decoded body of the server response either as \stdClass or string
		 */
		public function __construct(string $message = "", int $code = 0, ?array $responseHeaders = [], mixed $responseBody = NULL) {
			parent::__construct($message, $code);
			$this->responseHeaders = $responseHeaders;
			$this->responseBody    = $responseBody;
		}
		
		/**
		 * Gets the HTTP response header
		 *
		 * @return string[]|null HTTP response header
		 */
		public function getResponseHeaders(): ?array {
			return $this->responseHeaders;
		}
		
		/**
		 * Gets the HTTP body of the server response either as Json or string
		 *
		 * @return mixed HTTP body of the server response either as \stdClass or string
		 */
		public function getResponseBody(): mixed {
			return $this->responseBody;
		}
		
		/**
		 * Sets the deseralized response object (during deserialization)
		 *
		 * @param mixed $obj Deserialized response object
		 *
		 * @return void
		 */
		public function setResponseObject(mixed $obj): void {
			$this->responseObject = $obj;
		}
		
		/**
		 * Gets the deseralized response object (during deserialization)
		 *
		 * @return mixed the deserialized response object
		 */
		public function getResponseObject(): mixed {
			return $this->responseObject;
		}
	}
