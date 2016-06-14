<?php


namespace Fhp\Segment;


class Segment extends AbstractSegment
{
    public static function createFromString($string)
    {
        $lines = explode('+', $string);
        $header = array_shift($lines);
        $headerParts = explode(':', $header);

        $name = strtoupper($headerParts[0]);
        $segmentNumber = $headerParts[1];
        $version = $headerParts[2];

        return new self($name, 0, $segmentNumber, $version, $lines);
    }

    public function getName()
    {
        return $this->type;
    }
}