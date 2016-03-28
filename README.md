Klasemate
===================

![Latest release](https://img.shields.io/github/release/arcestiaishere/klasemate.svg)

Free open-source discussion board (forum) software, written in object-oriented PHP. Huge advancements were made in our Beta releases and we're working hard to bring new exciting features and important improvements! Read our [Contribution Guidelines](https://github.com/arcestiaishere/klasemate/blob/master/CONTRIBUTE.md) and be part of it.

## Highlight features##

* Full WYSIWYG post editor;
* Create and vote on polls;
* Mark threads as answered or obsolete;
* Social networks integration and sharing;
* Looks amazing in Retina Display and modern High-DPI screens;
* Built-in mobile support;
* API extension system for third-party tools and add-ins;
* Integrated database maintenance tools;
* Third-party themes and languages packs;
* Friendly URLs and built-in Search Engine Optimization (SEO) tools;
* Feeds: Atom syndication;
* And much more!

## Installing ##

1. [Download](https://github.com/arcestiaishere/klasemate/releases) the latest version of Klasemate. Upload all the files contained in this archive (retaining the directory structure).
2. Change the following files/directories permissions to read and write (CHMOD 777 or -rwxrwxrwx): `config.php`, `/install`, `/public/attachments` and `/public/avatar`.
3. Run your Klasemate (e.g. http://www.mywebsite.com/forum). You should be redirected to the installer (if not, read the note below). Please, have the login data of the MySQL server (host server, username and password), as well as the database name.
4. Follow the steps and wait until the installer gets your community ready.
5. Enjoy your fresh install of Klasemate!

*NOTE: If you are not redirected to the installer, make sure your config.php file is empty.*

*NOTE #2: For production environment never use `git clone` nor download ZIP from `development` branch. Always download the ZIP file from the [latest official release](https://github.com/arcestiaishere/klasemate/releases).*

### Requirements ###

* Apache 2 or IIS webserver running on any major operating system;
* Enabled Apache mod_rewrite or IIS Url Rewriter;
* PHP 5.3 or higher;
* MySQL 5.1 or higher.

#### This is a Beta version! ####

Klasemate v0.x **is not** ready for production environments. We're constantly modifying our database structure for performance enhancements and to add new features. If there is any breaking change, you may be stuck in an instable development version.

We're currently working on automatic updates to be released with the first Final version (a.k.a. v1.0): download and upload all files (it'll not overwrite uploads and avatars), delete the file `/install/.lock` and run `/update`. It'll magically run the migration files to update from any version to the latest version. But, as said, this feature will be available on v1.0.

## Contribute

We're glad you're interested to help develop Klasemate. Be part of it reading our [Contribution Guidelines](https://github.com/arcestiaishere/klasemate/blob/master/CONTRIBUTE.md).

If you want to contribute with language packs, translating Klasemate to your language, read the guidelines in its [official repository](https://github.com/arcestiaishere/klasemate-languages).

## About the Author ##

**Laurensius Jeffrey Chandra**, programmer in object-oriented PHP, JavaScript, Ruby, and Python

* My Twitter: http://twitter.com/LizSnowy
* My Facebook: http://facebook.com/Arcestia
