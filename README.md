<a href="http://www.ffuenf.de" title="ffuenf - code • design • e-commerce"><img src="https://github.com/ffuenf/Ffuenf_Common/blob/master/skin/adminhtml/default/default/ffuenf/ffuenf.png" alt="ffuenf - code • design • e-commerce" /></a>

Ffuenf_CheckoutHideShipping
===========================
[![GitHub tag](https://img.shields.io/github/tag/ffuenf/Ffuenf_CheckoutHideShipping.svg)](https://github.com/ffuenf/Ffuenf_CheckoutHideShipping)
[![Build Status](https://img.shields.io/travis/ffuenf/Ffuenf_CheckoutHideShipping.svg)](https://travis-ci.org/ffuenf/Ffuenf_CheckoutHideShipping)
[![Code Quality](https://scrutinizer-ci.com/g/ffuenf/Ffuenf_CheckoutHideShipping/badges/quality-score.png)](https://scrutinizer-ci.com/g/ffuenf/Ffuenf_CheckoutHideShipping)
[![Code Coverage](https://scrutinizer-ci.com/g/ffuenf/Ffuenf_CheckoutHideShipping/badges/coverage.png)](https://scrutinizer-ci.com/g/ffuenf/Ffuenf_CheckoutHideShipping)
[![PayPal Donate](https://img.shields.io/badge/paypal-donate-blue.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=J2PQS2WLT2Y8W&item_name=Magento%20Extension%3a%20Ffuenf_CheckoutHideShipping&item_number=Ffuenf_OrderExporter&currency_code=EUR)

This is a extension for Magento Community Edition that removes the shipping method step in the standard magento onestep checkout.
Implementation as proposed by http://magento.stackexchange.com/a/80148

Platform
--------

The following versions are supported and tested:

* Magento Community Edition 1.9.3.10
* Magento Community Edition 1.9.2.4
* Magento Community Edition 1.9.1.1

Other versions are assumed to work.

Requirements
------------

|                                                                               | PHP 7.0           | PHP 7.1              | PHP 7.2              |
| ----------------------------------------------------------------------------- | ----------------- | -------------------- | -------------------- |
| [EOL](https://secure.php.net/supported-versions.php) / SEC-FIX / STABLE / RC  | SEC-FIX           | **STABLE**           | **STABLE**           |
| automated tests on [travis]                                                   | **required pass** | **required pass**    | **allowed failures** |

Magento Community Edition [officially supports PHP 7.2](https://magento.com/tech-resources/download#download2240) as of 09-13-2018.

Installation
------------

Use [modman](https://github.com/colinmollenhour/modman) to install:
```
modman init
modman clone https://github.com/ffuenf/Ffuenf_Common
modman clone https://github.com/ffuenf/Ffuenf_CheckoutHideShipping
```

Deinstallation
--------------

#### via [Ffuenf_MageTrashApp](https://github.com/ffuenf/Ffuenf_MageTrashApp)

An additional module called [Ffuenf_MageTrashApp](https://github.com/ffuenf/Ffuenf_MageTrashApp) has been installed to help you to uninstall this extension in a clean way.
If it is not yet installed, please install it from [Ffuenf_MageTrashApp](https://github.com/ffuenf/Ffuenf_MageTrashApp)
If it is installed, go to your backend menu System > Configuration > Advanced > MageTrashApp, then click on the tab "Extension Installed", select the drop down option "Uninstall" of this extension and press "Save Config" button to uninstall
If you use this extension, you don't need to make any queries in your database as explained below in case of manually uninstallation.

#### via [modman](https://github.com/colinmollenhour/modman)

Use [modman](https://github.com/colinmollenhour/modman) to clear all files and symlinks:
```
modman clean Ffuenf_CheckoutHideShipping
```
see `sql/ffuenf_econda_setup/uninstall.sql` to clear all entries of this extension from your database.

Development
-----------
1. Fork the repository from GitHub.
2. Clone your fork to your local machine:

        $ git clone https://github.com/USER/Ffuenf_CheckoutHideShipping

3. Create a git branch

        $ git checkout -b my_bug_fix

4. Make your changes/patches/fixes, committing appropriately
5. Push your changes to GitHub
6. Open a Pull Request

License and Author
------------------

- Author:: Achim Rosenhagen (<a.rosenhagen@ffuenf.de>)
- Copyright:: 2019, ffuenf

The MIT License (MIT)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.