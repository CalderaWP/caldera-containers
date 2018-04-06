# Caldera Containers
A collection of useful containers for Caldera (or your) development.

## Install
`composer require caldera-containers`

## Requires PHP 5.6+
* [Not tested in 5.6 or 7.0, but should work](https://github.com/CalderaWP/caldera-containers/issues/1)
## Containers

* `calderawp\CalderaContainers\Container`
Basic PSR-11 compatible container decorating Pimple.
    - Is abstract.
    - Converts to arrays. `calderawp\CalderaContainers\Interfaces\Arrayable`
    - Converts to JSON. `JsonSerializable`

* `calderawp\CalderaContainers\ControlledContainer`
Extends the base container but only allows in specified attributes.
    - Is abstract
* `calderawp\CalderaContainers\Service\Coantainer`
A basic service container.

## Stuff.
Copyright 2018 CalderaWP LLC. License: GPL v2 or later.
