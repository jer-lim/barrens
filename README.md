# barrens

This is supposed to be a super simple framework for PHP projects. 
It barely does anything and requires the minimum amount of setup that you
have probably already done before.

## Why Use It

I have no idea. I use it for my prior projects in the form of [Prairie](https://github.com/keythkatz/prairie).
This project aims to simplify, modernise, and break up Prairie.

## Features
- Quick install
- Simple routing engine

## Requirements

- Apache2 (or implement your own URL rewriting)
- PHP 7.1 and above

## Setup

You'll need to have `AllowOverride All` for the install directory in your Apache config
and the `rewrite` Apache extension enabled.

If you haven't already, [install Composer](https://getcomposer.org/doc/00-intro.md).

Then run `php composer.phar install-project keythkatz/barrens ` to install it into
a folder `barrens` or `php composer.phar install-project keythkatz/barrens [install directory]` to install
it into a folder of your choice.

Point your domain to the `public/` folder.

At this point you should see a "Hey, it works!" message on your homepage.

## Usage

### Your code

Your code (should) live in the `src/` folder.

### Routing

TODO