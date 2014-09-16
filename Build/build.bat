xcopy ..\Source\SidWatchServer\*.* ..\Build\Output\ /s

erase Output\app\config\database.php

"C:\Program Files\7-Zip\7z.exe" a -tzip ..\Installs\Site.zip ..\Build\Output

rmdir /s/q Output

