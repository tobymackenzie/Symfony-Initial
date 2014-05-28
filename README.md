Symfony Standard TJM Edition
========================

Warning: This is a new project and is still in the works.  Major changes may happen without notice.

This is based upon [Symfony 2 Standard Edition](http://github.com/symfony/symfony-standard.git), modified for Toby Mackenzie's needs.
It is set up using the TJM [Symfony Standard Edition Bundle]() to make it easier to update Symfony versions.  It has symlinks to files in this repository for things that cannot be loaded through the autoloader.  They can be replaced with regular files if need be to override the SE functionality or settings.  It is also set up to use the TJM [Symfony/BaseBundle](https://github.com/tobymackenzie/Symfony-BaseBundle) repository as a base for routes, configuration, etc.

To use, set up is similar to with the Standard Edition without vendors.  It has a `bin/init` convenience script that handles installing and running composer plus a few other things.  Note that if you clone this repository, you will likely want to remove the '.git' folder, as it is not designed to be updated once put in place.  It is simply a starting point that can be modified for a site's specific needs.
