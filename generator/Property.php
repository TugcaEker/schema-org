<?php

namespace Spatie\SchemaOrg\Generator;

class Property
{
    /** @var string */
    public $name;

    /** @var string */
    public $description;

    /** @var string */
    public $resource;

    /** @var array */
    public $ranges = [];

    public function addRanges(array $ranges)
    {
        foreach ($ranges as $range) {
            $this->addRange($range);
        }
    }

    private function addRange(string $range)
    {
        $this->ranges[] = $range;
        $this->ranges[] = "{$range}[]";

        $this->ranges = array_unique($this->ranges);
    }
}
