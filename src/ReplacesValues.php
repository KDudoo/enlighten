<?php

namespace Styde\Enlighten;

trait ReplacesValues
{
    /**
     * Returns an array of values without the $ignored keys and
     * overwriting the given values with the $overwrite values.
     *
     * @param array $values
     * @param array $ignored
     * @param array $overwrite
     * @return array
     */
    public function replaceValues(array $values, array $ignored, array $overwrite): array
    {
        return collect($values)
            ->merge(array_intersect_key($overwrite, $values))
            ->diffKeys(array_flip($ignored))
            ->all();
    }
}
