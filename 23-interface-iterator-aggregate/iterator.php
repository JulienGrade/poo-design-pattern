<?php

class ExternalIterator implements IteratorAggregate
{
    public function __construct(private array $items = [])
    {
    }

    public function getIterator(): Traversable
    {
        print __FUNCTION__ . ' called' . PHP_EOL;

        return new ArrayIterator($this->items);
    }
}

$mappedArray = [
    'name' => 'John',
    'location' => 'Lille, FR',
    'role' => 'Développeur'
];

$externalIterator = new ExternalIterator($mappedArray);

$iterator = $externalIterator->getIterator();

print $iterator['name'] . PHP_EOL;

foreach ($externalIterator as $item => $value) {

    print "$item: $value" . PHP_EOL;
}