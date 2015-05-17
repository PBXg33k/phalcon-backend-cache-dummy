<?php
namespace pbxg33k\Phalcon\Cache\Backend;

use \Phalcon\Cache\BackendInterface;

class DummyCache implements BackendInterface
{
	public function __construct() {}

	public function start($keyName, $lifetime = null) { }

	public function stop ($buffer) { }

	public function getFrontend() { }

	public function getOptions() { }

	public function isFresh() { }

	public function isStarted() { }

	public function setLastKey() { }

	public function get($keyName, $lifetime = null) { }

	public function save($keyName = null, $content = null, $lifetime = null, $stopBuffer = null) { }

	public function delete($keyName) { }

	public function queryKeys($prefix) { }

	public function exists() {
		return false;
	}
}