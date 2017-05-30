<?php
Class HelloTest extends PHPUnit_Framework_TestCase{
	protected $hello;

	public function setUp(){
		$this->hello = new \Dracony\TravisDemo\Hello();
	}
	public funtion testWorld() {
		$this->assertSame('world',$this->hello->test());
	}
}
?>