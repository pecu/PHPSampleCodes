SCHTASKS /Create /RU SYSTEM /SC MINUTE /MO 1 /TN "test_sch_task1" /TR "C:\Program Files (x86)\Google\Chrome\Application\chrome.exe localhost\PHPSampleCodes\testBAT\test1.php"
SCHTASKS /Create /RU SYSTEM /SC MINUTE /MO 1 /TN "test_sch_task2" /TR "C:\AppServ\php5\php-win.exe -f C:\AppServ\www\PHPSampleCodes\testBAT\test2.php"