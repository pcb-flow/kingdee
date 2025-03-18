<?php

namespace PcbFlow\Kingdee\Concerns;

trait MapsFieldData
{
    /**
     * @param array $data
     * @param array $fieldMappings
     * @return array
     */
    public function mapFieldData($data, $fieldMappings)
    {
        $mapped = [];

        foreach ($fieldMappings as $attribute => $field) {
            if (isset($data[$attribute])) {
                $mapped[$field] = $data[$attribute];
            }
        }

        return $this->nestFieldData($mapped);
    }

    /**
     * @param array $data
     * @return array
     */
    protected function nestFieldData($data)
    {
        $nested = [];

        foreach ($data as $field => $value) {
            $temp = &$nested;

            $segments = explode('.', $field);

            foreach ($segments as $segment) {
                if (!isset($temp[$segment])) {
                    $temp[$segment] = [];
                }

                $temp = &$temp[$segment];
            }

            $temp = $value;
        }

        return $nested;
    }
}
