# Valet *WSL*

This is a fork of valeryan/valet-wsl to implement root CA creation and signing as per the upstream laravel/valet project.

Simply install the `~/.valet/CA/LaravelValetCASelfSigned.pem` root certificate on your devices and all Valet secured sites will be trusted.

## Introduction

This is currently a test to see if valet-linux can be made to work with Windows Subsystem for Linux. I am using this package to explore what would need to be done to make valet compatibly with the current Insiders preview build.

## Known Limitations and Issues

Currently I have not been able to get Windows to talk to dnsmasq so another solution has to be found. Also, `valet secure` will not be seamless and will require a windows script be run after a site is secured to install the certs in Windows.

## Current Goals

My current goal is to come as close to creating the valet experience as possible on windows. I will accomplish this by modifying the valet script to be able to handle WSL problems. I am pretty sure I will not be able to remove the need to install ssl certs in windows and unless I get dnsmasq to work one day a windows dns proxy will have to be installed and configured. 

## Official Documentation

Documentation for Valet can be found on the [Valet Linux website](https://cpriego.github.io/valet-linux/).

## Setup Procedures

Documentation for how I setup and use this version of valet on my own system: [WSL Setup Gist](https://gist.github.com/valeryan/d071dad5a32ccf94d07e685a2bdd2818).

## License

Laravel Valet is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
