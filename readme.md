JoshuaEstes/stHelloWorld
========================

This is an example of how to create commands to use for the ServerTools
script.

See https://github.com/JoshuaEstes/ServerTools

Requirements
------------

The command must end with Command.php, for example HelloCommand.php, HelloWorldCommand.php, FooCommand.php
are all valid, while CommandIAmNot.php is not.

You can place the commands in any directory structure you like, as long as the namespace and classname
match the directory structure. An example of this is the WorldCommand.php located in the Hello
directory. The namespace matches, ie "JoshuaEstes\stHelloWorld\Hello" and the class name is "World".

Also check out the composer.json file.

References
----------

Here is come documentation that should help you write your own tasks. ServerTools by default will
pull these in. If you need anything else, put it in your composer.json file.

  * http://symfony.com/doc/current/components/console.html
  * http://symfony.com/doc/current/components/finder.html
  * http://symfony.com/doc/current/components/process.html
