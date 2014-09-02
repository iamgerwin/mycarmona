<?php namespace Alas\Transformers;

class CctvTransformer extends Transformer {

    public function transform($item)
    {
        return [
            'name' => $item['name'],
            'location' => $item['location'],
            'description' => $item['description'],
            'allow' => $item['active']
        ];
    }
}