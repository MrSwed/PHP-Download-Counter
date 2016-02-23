DLCounter
=========

DLCounter is a simple and clean flat-file PHP download counter. It's compatible with all web servers running PHP 5.x, does not require SQL, and is extremely easy to set up.

At now, counting system completely hidden from the visitors. Statistic of downloads going by the real links of files, regardless of download type, so that you do not have to specify a special links to download files, such as counter.php?file=FILENAME

Installation/Usage: 
 1. Upload www to your server and rename it to anything you want, ex: /download.
 2. Upload your files to the /files directory, ex: /download/files.
 3. Add content of .htaccess.example to you .htaccess 
 4. View your download stats and client info in /stats.
 5. Use counts of downloads in frontend page, by including snippet in get_count.php

Customization:
- The directories for logging stats (default: /stats) and for uploading files (default: /files) can be changed by editing their respective values in config.php
- If you are on a non-*nix machine and/or do not have PHP exec enabled, set the 'nixWithExec' value in config.php to false
- Change your default time zone in the config file
- Change what client info is logged and formatted in the log file in the config file
- If you want to secure your stats folder, you should either rename it (method above) or lock it with .htaccess
- Enable/disable full stat 
- Enable/disable counters only
- Set statistic and counts files extensions