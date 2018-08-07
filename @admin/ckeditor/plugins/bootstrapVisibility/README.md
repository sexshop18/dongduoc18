# Bootstrap Visibility Plugin for CKEditor
The Bootstrap Visibility plugin for CKEditor extends several dialog windows adding a "Responsive Visibility" tab that allows you to control if various elements should be displayed on different screen sizes. This uses Bootstrap 3's responsive classes. This will only work on websites which are already using the Bootstrap 3.x framework.

## Features Overview
* Adds a "Responsive Visibility" tab to the following element dialogs: text field, textarea, button, select, radio, checkbox, div, table, image, image button, flash, and form
* Localizations for English, Spanish, Italian, French, & Russian

## Requirements
1. CKEditor version 4.4.7 or greater [https://ckeditor.com/](https://ckeditor.com/)
1. The Forms plugin for CKEditor (normally installed by default)
1. The front-end of your website must already be using the Bootstrap 3.X framework [https://getbootstrap.com/](https://getbootstrap.com/ for more information)

## Installation Instructions
1. Extract the downloaded repository
1. Copy the **bootstrapVisibility** folder to your **"ckeditor/plugins/"** folder
1. Open the **"ckeditor/config.js"** file in your favorite text editor
1. Add **bootstrapVisibility** to **config.extraPlugins** and save your changes. If that line isn't found, add it. EX:

> config.extraPlugins = 'bootstrapVisibility';

## Credits / Tribute
This plugin was developed and is maintained by the [https://totalwebservices.net/](Total Web Services team).

A big thanks goes out to the following people & organizations:
[https://www.websiterelevance.com](WebsiteRelevance.com) - for supporting the development of the plugin.
[https://www.ckeditor.com](CKEditor) - For providing CKEditor so we could build this plugin for it.
[https://getbootstrap.com/](https://getbootstrap.com/) - For providing the awesome Bootstrap framework for everyone to use.

## License
Licensed under GPL Version 3.0. For additional details please see the LICENSE.md file.