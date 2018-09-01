# TYPO3 Site Package Extension

## About

This **TYPO3 Site Package Extension** is based on the [TYPO3 Site Package Tutorial](https://docs.typo3.org/typo3cms/SitePackage/),
written by Michael Schams and published by the TYPO3 Documentation Team.

## Requirements

An **empty** TYPO3 version 9.x.x instance.  
*Note: a site package extension for TYPO3 v8 is also available. See below.*

## Installation

The following sections assume, a fresh and empty TYPO3 instance has been set up and is ready to use.

### Command Line With "composer"

*To be documented.*

### Command Line without "composer"

*To be documented.*

### ZIP Files from GitHub

Go to [GitHub](https://github.com/schams-net/site_package/) and select on which TYPO3 version you plan to install the Site Package
(select the appropriate Git branch from the dropdown box, e.g. `TYPO3v9`). Click button "Clone or download" on the right hand side
and follow the link "Download ZIP". Save the ZIP file on your local machine.

Extract the folder from the downloaded ZIP file, e.g. `site_package-TYPO3v9/`. Open this folder with your favorite file manager and
create a new ZIP file. Depending on your operating system, this can usually be done by selecting all files and sub-folders, followed
by a right mouse button click and selecting "Compress" or "Create archive" or similar. Make sure, the file name of the new
ZIP file reads exactly `site_package.zip` and all files and folders exist on the root level of the ZIP archive.

Login at the backend of your empty TYPO3 instance using a backend user with administrator privileges. Open the Extension Manager and
upload the newly created ZIP file `site_package.zip`.

## Activation and Configuration

*To be documented.*

## License

The MIT License

Copyright (c) 2018 Michael Schams, https://schams.net

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files
(the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge,
publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do
so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
