Symfony Standard TJM Edition
========================

Warning: This is a new project and is still in the works.  Major changes may happen without notice.

This is based upon [Symfony 2 Standard Edition](http://github.com/symfony/symfony-standard.git), modified for Toby Mackenzie's needs.  It is set up to allow easier updates of some of the functionality through the TJM [Symfony/Shared](https://github.com/tobymackenzie/Symfony-Shared) repository, and as such is dependent on it. It has symlinks to files in the 'Shared' repository, which can be replaced with regular files if need be to override the shared functionality or settings.  It is also set up to use the TJM [Symfony/BaseBundle](https://github.com/tobymackenzie/Symfony-BaseBundle) repository as a base for routes, configuration, etc.  

To use, set up is similar to with the Standard Edition without vendors, except that you must run 'bin/init' before running 'bin/vendors install'.  Also note that if you clone this repository, you will likely want to remove the '.git' folder, as it is not designed to be updated once put in place.  It is simply a starting point that can be modified for a site's specific needs.
