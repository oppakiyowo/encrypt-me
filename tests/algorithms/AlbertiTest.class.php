<?php
require_once 'src/algorithms/Alberti.class.php';

/**
 * This class contains the unit tests for block transposition algorithm.
 */
class AlbertiTest extends PHPUnit_Framework_TestCase {
	/**
	 * Set up test.
	 */
	protected function setUp() {
	}
	
	/**
	 * Tear down test.
	 */
	protected function tearDown() {
	}
	
	/**
	 * Test encryption.
	 */
	public function testEncrypt() {
		$algorithm = new Alberti ( "NVBCXWMLKHJGFDSQPOIUYTREZA", "HZAYOFNBGPMXKWCVQDRESJIUTL" );
		
		// RENDEZ VOUS A MIDI PLACE DE LA LIBERTE
		$encryptedText = $algorithm->encrypt ( "RENDEZ VOUS A MIDI" );
		$this->assertEquals ( "OODYXLTCYRNKKYK", $encryptedText );
	}
	
	/**
	 * Test decryption.
	 */
	public function testDecrypt() {
		$algorithm = new Alberti ( "NVBCXWMLKHJGFDSQPOIUYTREZA", "HZAYOFNBGPMXKWCVQDRESJIUTL" );
		
		// RENDEZ VOUS A MIDI PLACE DE LA LIBERTE
		$decryptedText = $algorithm->decrypt ( "OODYXLTCYRNKKYK" );
		$this->assertEquals ( "RENDEZVOUSAMIDI", $decryptedText );
	}
}

?>