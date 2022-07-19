<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ResourcesFixture
 */
class ResourcesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'string' => 'Lorem ipsum dolor sit amet',
                'number' => 1,
                'date' => '2022-07-19',
            ],
        ];
        parent::init();
    }
}
