<?php
namespace ANavallaSuiza\Ecommerce\Cart\Storage;

interface StorageInterface
{
    /**
     * Checks that data exists in storage.
     *
     * @param string $key
     *
     * @return bool
     */
    public function hasData($key);

    /**
     * Returns data from storage or the default one.
     *
     * @param string $key
     * @param mixed  $default
     *
     * @return mixed
     */
    public function getData($key, $default = null);

    /**
     * Sets data in storage.
     *
     * @param string $key
     * @param mixed  $value
     */
    public function setData($key, $value);

    /**
     * Remove data from storage.
     *
     * @param string $key
     */
    public function removeData($key);
}
