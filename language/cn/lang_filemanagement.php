<?php
$lang['L_CONVERT_START']="Start Conversion";
$lang['L_CONVERT_TITLE']="Convert Dump to MSD Format";
$lang['L_CONVERT_WRONG_PARAMETERS']="Wrong parameters!  Conversion is not possible.";
$lang['L_FM_UPLOADFILEREQUEST']="please choose a file.";
$lang['L_FM_UPLOADNOTALLOWED1']="This file type is not supported.";
$lang['L_FM_UPLOADNOTALLOWED2']="Valid types are: *.gz and *.sql-files";
$lang['L_FM_UPLOADMOVEERROR']="Couldn't move selected file to the upload directory.";
$lang['L_FM_UPLOADFAILED']="The upload has failed!";
$lang['L_FM_UPLOADFILEEXISTS']="A file with the same name already exists !";
$lang['L_FM_NOFILE']="You didn't choose a file!";
$lang['L_FM_DELETE1']="The file ";
$lang['L_FM_DELETE2']=" was deleted successfully.";
$lang['L_FM_DELETE3']=" couldn't be deleted!";
$lang['L_FM_CHOOSE_FILE']="选择文件:";
$lang['L_FM_FILESIZE']="文件大小";
$lang['L_FM_FILEDATE']="文件数据";
$lang['L_FM_NOFILESFOUND']="没有找到文件.";
$lang['L_FM_TABLES']="数据表";
$lang['L_FM_RECORDS']="记录";
$lang['L_FM_ALL_BU']="所有备份信息";
$lang['L_FM_ANZ_BU']="备份";
$lang['L_FM_LAST_BU']="上次备份";
$lang['L_FM_TOTALSIZE']="总大小";
$lang['L_FM_SELECTTABLES']="选择数据表";
$lang['L_FM_COMMENT']="输入备注";
$lang['L_FM_RESTORE']="还原";
$lang['L_FM_ALERTRESTORE1']="Should the database";
$lang['L_FM_ALERTRESTORE2']="be restored with the records from the file";
$lang['L_FM_ALERTRESTORE3']=" ?";
$lang['L_FM_DELETE']="删除";
$lang['L_FM_ASKDELETE1']="Should the file(s)";
$lang['L_FM_ASKDELETE2']="really be deleted?";
$lang['L_FM_ASKDELETE3']="Do you want autodelete to be executed with configured rules now?";
$lang['L_FM_ASKDELETE4']="Do you want to delete all backup files?";
$lang['L_FM_ASKDELETE5']="Do you want to delete all backup files with ";
$lang['L_FM_ASKDELETE5_2']="_* ?";
$lang['L_FM_DELETEAUTO']="Run autodelete manually";
$lang['L_FM_DELETEALL']="Delete all backup files";
$lang['L_FM_DELETEALLFILTER']="Delete all with ";
$lang['L_FM_DELETEALLFILTER2']="_*";
$lang['L_FM_STARTDUMP']="开始备份";
$lang['L_FM_FILEUPLOAD']="Upload file";
$lang['L_FM_DBNAME']="数据库名";
$lang['L_FM_FILES1']="数据库备份";
$lang['L_FM_FILES2']="数据库结构";
$lang['L_FM_AUTODEL1']="Autodelete: the following files were deleted because of maximum files setting:";
$lang['L_DELETE_FILE_SUCCESS']="File \"%s\" was deleted successfully.";
$lang['L_FM_DUMPSETTINGS']="备份配置";
$lang['L_FM_OLDBACKUP']="(未知)";
$lang['L_FM_RESTORE_HEADER']="还原数据库 \"<strong>%s</strong>\"";
$lang['L_DELETE_FILE_ERROR']="删除文件失败\"%s\"!";
$lang['L_FM_DUMP_HEADER']="备份";
$lang['L_DOCRONBUTTON']="Run the Perl Cron script";
$lang['L_DOPERLTEST']="Test Perl Modules";
$lang['L_DOSIMPLETEST']="Test Perl";
$lang['L_PERLOUTPUT1']="Entry in crondump.pl for absolute_path_of_configdir";
$lang['L_PERLOUTPUT2']="URL for the browser or for external Cron job";
$lang['L_PERLOUTPUT3']="Commandline in the Shell or for the Crontab";
$lang['L_RESTORE_OF_TABLES']="选择要还原的数据表";
$lang['L_CONVERTER']="Backup Converter";
$lang['L_CONVERT_FILE']="File to be converted";
$lang['L_CONVERT_FILENAME']="Name of destination file (without extension)";
$lang['L_CONVERTING']="转换";
$lang['L_CONVERT_FILEREAD']="Read file '%s'";
$lang['L_CONVERT_FINISHED']="Conversion finished, '%s' was written successfully.";
$lang['L_NO_MSD_BACKUPFILE']="Backups of other scripts";
$lang['L_MAX_UPLOAD_SIZE']="Maximum filesize";
$lang['L_MAX_UPLOAD_SIZE_INFO']="If your Dumpfile is bigger than the above mentioned limit, you must upload it via FTP into the directory \"work/backup\".
After that you can choose it to begin a restore progress. ";
$lang['L_ENCODING']="编码";
$lang['L_FM_CHOOSE_ENCODING']="选择备份文件的编码";
$lang['L_CHOOSE_CHARSET']="MySQLDumper couldn't detect the encoding of the backup file automatically.
<br>You must choose the charset with which this backup was saved.
<br>If you discover any problems with some characters after restoring, you can repeat the backup-progress and then choose another character set.
<br>Good luck. ;)";
$lang['L_DOWNLOAD_FILE']="下载文件";
$lang['L_BACKUP_NOT_POSSIBLE'] = "A backup of the system database `%s` is not possible!";
?>