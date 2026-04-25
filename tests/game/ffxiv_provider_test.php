<?php
/**
 * @package bbGuild FFXIV Extension
 * @copyright (c) 2026 avathar.be
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

namespace avathar\bbguild_ffxiv\tests\game;

use PHPUnit\Framework\TestCase;
use avathar\bbguild_ffxiv\game\ffxiv_provider;
use avathar\bbguild_ffxiv\game\ffxiv_installer;

class ffxiv_provider_test extends TestCase
{
	/** @var ffxiv_provider */
	private $provider;

	protected function setUp(): void
	{
		parent::setUp();

		$installer = $this->getMockBuilder(ffxiv_installer::class)
			->disableOriginalConstructor()
			->getMock();

		$ext_manager = $this->getMockBuilder(\phpbb\extension\manager::class)
			->disableOriginalConstructor()
			->getMock();
		$ext_manager->method('get_extension_path')
			->willReturn('ext/avathar/bbguild_ffxiv/');

		$this->provider = new ffxiv_provider($installer, $ext_manager);
	}

	public function test_game_id(): void
	{
		$this->assertSame('ffxiv', $this->provider->get_game_id());
	}

	public function test_game_name(): void
	{
		$this->assertSame('Final Fantasy XIV', $this->provider->get_game_name());
	}

	public function test_installer(): void
	{
		$this->assertInstanceOf(ffxiv_installer::class, $this->provider->get_installer());
	}

	public function test_has_no_api(): void
	{
		$this->assertFalse($this->provider->has_api());
		$this->assertNull($this->provider->get_api());
	}

	public function test_images_path(): void
	{
		$this->assertStringContainsString('bbguild_ffxiv', $this->provider->get_images_path());
		$this->assertStringEndsWith('images/', $this->provider->get_images_path());
	}

	public function test_regions(): void
	{
		$regions = $this->provider->get_regions();
		$this->assertCount(2, $regions);
		$this->assertSame(array(
			'us' => 'NA',
			'eu' => 'EU',
		), $regions);
	}

	public function test_api_locales_empty(): void
	{
		$this->assertEmpty($this->provider->get_api_locales());
	}

	public function test_armor_types(): void
	{
		$armor = $this->provider->get_armor_types();
		$this->assertCount(3, $armor);
		$this->assertSame(array(
			'CLOTH' => 'Cloth',
			'LEATHER' => 'Leather',
			'PLATE' => 'Plate',
		), $armor);
	}
}
