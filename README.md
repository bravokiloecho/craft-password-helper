# Craft Password Helper
>For when you need help with passwords on Craft

One day I created an admin account with a very long and complicated password. And then I forgot the password. You can find the hashed version of the password in the database under the table `craft_users` but good luck unhashing it. So I needed to make a new long and complicated password, hash it, then put it back into the database.

[Chris helped me out on Stack Exchange](http://craftcms.stackexchange.com/a/13783/467) and then I built this plugin.

To hash your password, include this in your template:

`{{ craft.PasswordHelper.getHash('longandcomplicatedpassword') }}`

Then put the result into your database.

### **_ *^*^*^* WARNING: *^*^*^* _**
DON'T LEAVE THIS HANGING AROUND IN YOUR TEMPLATES. REMOVE WHEN YOU'VE DONE WHAT NEEDS DOING.

IDEALLY ONLY USE LOCALLY.

### Installation

Download and extract and place the `PasswordHelper` folder in your `craft/plugins/` directory.