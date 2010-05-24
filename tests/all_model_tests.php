<?php
require_once 'init.tests.php';
require_once $SOURCE_ROOT_PATH.'extlib/simpletest/autorun.php';
require_once $SOURCE_ROOT_PATH.'extlib/simpletest/web_tester.php';
require_once $SOURCE_ROOT_PATH.'extlib/simpletest/mock_objects.php';

/* MODEL TESTS */
require_once $SOURCE_ROOT_PATH.'tests/TestOfConfig.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfDatabase.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfFollowDAO.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfInstanceDAO.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfLinkDAO.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfLogging.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfMySQLDAO.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfOwnerInstanceDAO.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfPluginDAO.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfPluginHook.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfPostDAO.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfUserDAO.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfUtils.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfPDODAO.php';

$modeltest = & new GroupTest('Model tests');
$modeltest->addTestCase(new TestOfLogging());
$modeltest->addTestCase(new TestOfPDODAO());
$modeltest->addTestCase(new TestOfConfig());
$modeltest->addTestCase(new TestOfDatabase());
$modeltest->addTestCase(new TestOfFollowDAO());
$modeltest->addTestCase(new TestOfInstanceDAO());
$modeltest->addTestCase(new TestOfLinkDAO());
$modeltest->addTestCase(new TestOfMySQLDAO());
$modeltest->addTestCase(new TestOfOwnerInstanceDAO());
$modeltest->addTestCase(new TestOfPluginDAO());
$modeltest->addTestCase(new TestOfPluginHook());
$modeltest->addTestCase(new TestOfPostDAO());
$modeltest->addTestCase(new TestOfUserDAO());
$modeltest->addTestCase(new TestOfUtils());
$modeltest->run( new TextReporter());
?>