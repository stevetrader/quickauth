# QuickAuth

Super quick and dirty, single file, one user auth for php. I wouldn't recommend using this in a public production environment, but it should work fine for internal stuff and anything that's not super important. Username and password are hardcoded in the file.

## How

First you need to copy the auth.php file.

Next add one line at the top of the file you want to protect.

```
<?php require_once('auth.php'); ?>
```

Last, change the username and password in the auth.php file to what you want. They are on lines 8 & 9.