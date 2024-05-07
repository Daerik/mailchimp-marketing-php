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
	
	/**
	 * ApiException Class Doc Comment
	 *
	 * @author   Swagger Codegen team
	 * @link     https://github.com/swagger-api/swagger-codegen
	 * @category Class
	 * @package  MailchimpMarketing
	 */
	class HeaderSelector {
		
		/**
		 * @param string[] $accept
		 * @param string[] $contentTypes
		 *
		 * @return array
		 */
		public function selectHeaders(array $accept, array $contentTypes): array {
			$headers = [];
			
			$accept = $this->selectAcceptHeader($accept);
			if($accept !== NULL) {
				$headers['Accept'] = $accept;
			}
			
			$headers['Content-Type'] = $this->selectContentTypeHeader($contentTypes);
			return $headers;
		}
		
		/**
		 * @param string[] $accept
		 *
		 * @return array
		 */
		public function selectHeadersForMultipart(array $accept): array {
			$headers = $this->selectHeaders($accept, []);
			
			unset($headers['Content-Type']);
			return $headers;
		}
		
		/**
		 * Return the header 'Accept' based on an array of Accept provided
		 *
		 * @param string[] $accept Array of header
		 *
		 * @return string Accept (e.g. application/json)
		 */
		private function selectAcceptHeader(array $accept): ?string {
			if(count($accept) === 0 || (count($accept) === 1 && $accept[0] === '')) {
				return NULL;
			} elseif(preg_grep("/application\/json/i", $accept)) {
				return 'application/json';
			} else {
				return implode(',', $accept);
			}
		}
		
		/**
		 * Return the content type based on an array of content-type provided
		 *
		 * @param string[] $contentType Array fo content-type
		 *
		 * @return string Content-Type (e.g. application/json)
		 */
		private function selectContentTypeHeader(array $contentType): string {
			if(count($contentType) === 0 || (count($contentType) === 1 && $contentType[0] === '')) {
				return 'application/json';
			} elseif(preg_grep("/application\/json/i", $contentType)) {
				return 'application/json';
			} else {
				return implode(',', $contentType);
			}
		}
	}
