<?php
/**
 * Created by Aleksandr Kozhevnikov <iamdevice@gmail.com>
 * Date: 26.12.2019 00:07
 */

namespace BeerPHP\Izhevsk\Test;

use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase
{
    /**
     * @dataProvider successfulProvider
     *
     * @param string $expected
     * @param string $actual
     */
    public function testCompareStrings(string $expected, string $actual): void
    {
        $this->assertEquals($expected, $actual);
    }

    public function successfulProvider(): array
    {
        return [
            [
                'expected' => 'BeerPHP',
                'actual' => 'BeerPHP',
            ],
            [
                'expected' => 'Izhevsk',
                'actual' => 'Izhevsk',
            ]
        ];
    }
}
