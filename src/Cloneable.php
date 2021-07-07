<?php
	namespace Stein197;

	/**
	 * This interface should be implemented by classes which instances are supposed to be cloned.
	 * @package Stein197
	 */
	interface Cloneable {

		/**
		 * This method should contain clone statements if the current object holds references to other objects in order
		 * to perform deep clone. For example:
		 * ```php
		 * public function __clone(): void {
		 * 	$this->complexObject = clone $this->complexObject
		 * }
		 * ```
		 * @return void
		 */
		public function __clone(): void;
	}
