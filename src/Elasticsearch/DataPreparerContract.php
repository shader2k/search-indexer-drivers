<?php

namespace Shader2k\SearchIndexerDrivers\Elasticsearch;

use Shader2k\SearchIndexer\Contracts\Indexable\IndexableCollectionContract;

interface DataPreparerContract
{
    /**
     * @param IndexableCollectionContract $collection
     * @param array $modelParams
     * @param string $method
     * @return array
     */
    public function forBulk(IndexableCollectionContract $collection, array $modelParams, string $method = 'index'): array;
}
