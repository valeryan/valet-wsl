<?php

use Valet\CommandLine;
use Illuminate\Container\Container;
use Valet\ServiceManagers\LinuxService;
use PHPUnit\Framework\TestCase;

class LinuxServiceTest extends TestCase
{
    public function setUp(): void
    {
        $_SERVER['SUDO_USER'] = user();

        Container::setInstance(new Container);
    }


    public function tearDown(): void
    {
        Mockery::close();
    }


    public function test_service_can_be_resolved_from_container()
    {
        $this->assertInstanceOf(LinuxService::class, resolve(LinuxService::class));
    }


    public function test_restart_restarts_the_service_using_linux_services()
    {
        $cli = Mockery::mock(CommandLine::class);
        $cli->shouldReceive('quietly')->once()->with('sudo service nginx restart');
        swap(CommandLine::class, $cli);
        resolve(StubForGetRealService::class)->restart('nginx');
    }


    public function test_start_starts_the_service_using_linux_services()
    {
        $cli = Mockery::mock(CommandLine::class);
        $cli->shouldReceive('quietly')->once()->with('sudo service nginx start');
        swap(CommandLine::class, $cli);
        resolve(StubForGetRealService::class)->start('nginx');
    }


    public function test_stop_stops_the_service_using_linux_services()
    {
        $cli = Mockery::mock(CommandLine::class);
        $cli->shouldReceive('quietly')->once()->with('sudo service nginx stop');
        swap(CommandLine::class, $cli);
        resolve(StubForGetRealService::class)->stop('nginx');
    }
}

class StubForGetRealService extends LinuxService
{
    public function getRealService($service)
    {
        return $service;
    }
}
