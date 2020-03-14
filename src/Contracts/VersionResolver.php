<?php


namespace RafaelMilaniBarbosa\ElasticApm\Contracts;


interface VersionResolver
{
    public function getVersion(): string;
}
