<?php

/**
 * WikifunctionsClient integration test suite for Parser-related hooks
 *
 * @copyright 2020– Abstract Wikipedia team; see AUTHORS.txt
 * @license MIT
 */

namespace MediaWiki\Extension\WikifunctionsClient\Tests\Integration;

use MediaWiki\Parser\Parser;
use MediaWikiIntegrationTestCase;

/**
 * @covers \MediaWiki\Extension\WikifunctionsClient\Hooks
 * @group Database
 */
class HooksTest extends MediaWikiIntegrationTestCase {

	public function testOnParserFirstCallInit() {
		// Force-enable our code
		$this->overrideConfigValues( [
			'WikifunctionsClientEnableParserFunction' => true,
		] );

		$parser = $this->createMock( Parser::class );
		$parser->expects( $this->once() )
			->method( 'setFunctionHook' )
			->with( 'function', $this->isType( 'callable' ) );

		$hooks = new \MediaWiki\Extension\WikifunctionsClient\Hooks();
		$hooks->onParserFirstCallInit( $parser );
	}
}
