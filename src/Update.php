<?php

    namespace b2db;

    /**
     * Insertion wrapper class
     *
     * @package b2db
     */
    class Update extends Insertion
    {

        /**
         * @param string $column
         * @param mixed $value
         * @param string|null $variable
         * @param string|null $type
         */
        public function update(string $column, $value, string $variable = null, string $type = null): void
        {
            $this->add($column, $value, $variable, $type);
        }

    }
