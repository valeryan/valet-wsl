<?php

namespace Valet\Contracts;

interface ServiceManager
{
    /**
     * enable the given services.
     *
     * @param
     * @return void
     */
    public function enable($services);

    /**
     * disable the given services.
     *
     * @param
     * @return void
     */
    public function disable($services);

    /**
     * Start the given services.
     *
     * @param
     * @return void
     */
    public function start($services);

    /**
     * Stop the given services.
     *
     * @param
     * @return void
     */
    public function stop($services);

    /**
     * Restart the given services.
     *
     * @param
     * @return void
     */
    public function restart($services);

    /**
     * Status the given services.
     *
     * @param
     * @return void
     */
    public function status($services);

    /**
     * Status the given services.
     *
     * @param
     * @return void
     */
    public function printStatus($services);

    /**
     * Determine if service manager is available on the system.
     *
     * @return bool
     */
    public function isAvailable();

    /**
     * Determine if the given service is disabled.
     *
     * @return bool
     */
    public function disabled($service);
}
