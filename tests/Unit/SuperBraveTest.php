<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\SuperBrave;

class SuperBraveTest extends TestCase
{
    /**
     * @dataProvider valid_values()
     */
    public function test_expected_valid_superbrave_values($n, $expected)
    {
        $this->assertEquals($expected, (string)(new SuperBrave($n)));
    }

    public function valid_values()
    {
        return [
            [1, '1'],
            [3, 'Super'],
            [5, 'Brave'],
            [10, 'Brave'],
            [15, 'SuperBrave'],
            [30, 'SuperBrave'],
            [33, 'Super']
        ];
    }
}