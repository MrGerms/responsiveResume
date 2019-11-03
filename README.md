## Project: responsiveResume

*** Simple Resume in a Responsive Grid with Twilio Contact ***
### Configuration
There is some minor configuration needed to add your third party account id's and keys in order to get this project up and running. For your conveneince there are example files provided. In both cases you can simply add in your account variables and rename the example files without the '_EXAMPLE_FILE_' file prefix. Remember to add the actual config pages to your .gitignore file if you decide to create a repo.

The config file in config\_EXAMPLE_FILE_g_sk.php will hold your google reCaptcha secret key. To get one, goto https://www.google.com/recaptcha/intro/v3.html

The config file in config\_EXMPLE_FILE_bootstrap.php will set up your twilio account in order to send responses from the contact card directly to your phone. You can sign up at https://www.twilio.com/. There will be minor charges if you decide to use the SMS features. If you wish to change this functionality, you can update the /sendMessage.php file.


### TODO's:

1. Need some fine tuning on Responsive media queries. Footer, .skills area, headers in history area
2. Need to add a link to this github page
3. Add some CSS and JS pizazz. Image/icon resize on hover, hero background image refocus when hovering name, etc.
4. Convert to SASS

Unsure, might add in the future:
- Menu, I honestly don't want to add this but might for UI/UE demonstration
- Link to portfolio page
- Link to background projects / Currently working on page
- Add a custom database / CMS backend for config settings and maybe content updates.
- Blog for interesting problems I come across
- Sales page for freelance work


Completed:
+ responsive grid CSS
+ Added modal window for contact form
+ Added google recaptcha to contact form
+ Added Twilio connection to contact form
+ Added SS verification for above inputs
+ Added Parsley js verification to contact form
+ Improve media queries between 481 and 1150 pixels and stopped text hitting sides. 
