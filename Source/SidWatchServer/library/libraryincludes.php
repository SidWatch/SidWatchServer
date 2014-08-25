<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";

require_once $_SERVER["DOCUMENT_ROOT"]."/library/handlers/AbstractHandler.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/library/handlers/UploadAccessHandler.php";

require_once $_SERVER["DOCUMENT_ROOT"]."/library/objects/AbstractObject.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/library/objects/AccessKey.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/library/objects/File.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/library/objects/Password.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/library/objects/Site.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/library/objects/Station.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/library/objects/User.php";

require_once $_SERVER["DOCUMENT_ROOT"]."/library/database/AbstractMongoDAO.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/library/database/AccessKeyDAO.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/library/database/FileDAO.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/library/database/PasswordDAO.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/library/database/SiteDAO.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/library/database/StationDAO.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/library/database/UserDAO.php";

require_once $_SERVER["DOCUMENT_ROOT"]."/library/managers/AppManager.php";