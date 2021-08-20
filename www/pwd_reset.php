<?php
/**
 * @author Pavel Vyskocil <vyskocilpavel@muni.cz>
 */


use SimpleSAML\Configuration;
use SimpleSAML\Error\Exception;
use SimpleSAML\Logger;
use SimpleSAML\Module\perun\AdapterRpc;
use SimpleSAML\XHTML\Template;

const LANG_EN = 'en';
const PWD_RESET = 'pwd_reset';
const PWDRESET_lsaai_ENTITY_ID = 'lsaai_entity_id';
const PWDRESET_lsaai_SCOPE = 'lsaai_scope';
const PWDRESET_VO_SHORT_NAME = 'vo_short_name';
const PWDRESET_PERUN_NAMESPACE = 'perun_namespace';
const PWDRESET_PERUN_URL = 'perun_url';
const PWDRESET_PERUN_EMAIL_ATTR = 'perun_email_attr';

const CONFIG_FILE_NAME = 'module_lsaai.php';

$config = Configuration::getInstance();

$t = new Template($config, 'lsaai:pwd_reset-tpl.php');
$t->show();


function sendPasswordResetEmail($userName) {
    $rpcAdapter = new AdapterRpc();

    $conf = Configuration::getConfig(CONFIG_FILE_NAME);
    $pwdConf = $conf->getConfigItem(PWD_RESET);
    $lsaaiEntityId = $pwdConf->getString(PWDRESET_lsaai_ENTITY_ID);
    $lsaaiScope = $pwdConf->getString(PWDRESET_lsaai_SCOPE);
    $voShortName = $pwdConf->getString(PWDRESET_VO_SHORT_NAME);
    $perunNamespace = $pwdConf->getString(PWDRESET_PERUN_NAMESPACE);
    $perunUrl = $pwdConf->getString(PWDRESET_PERUN_URL);
    $emailAttr = $pwdConf->getString(PWDRESET_PERUN_EMAIL_ATTR);

    $userName = trim($userName);
    $userNameParts = explode('@', $userName, 2);
    $userName = $userNameParts[0] . '_' . strtolower($userNameParts[1]);

    $uid = [$userName . $lsaaiScope];
    $user = null;
    try {
        $user = $rpcAdapter->getPerunUser($lsaaiEntityId, $uid);
    } catch (Exception $ex) {
        throw new Exception("There are no LifeScience Hostel user with username: " . $userName, $ex);
    }
    if (is_null($user )){
        throw new Exception("There are no LifeScience Hostel user with username: " . $userName);
    }

    $vo = $rpcAdapter->getVoByShortName($voShortName);
    $member = $rpcAdapter->getMemberByUser($user, $vo);

    $connector = $rpcAdapter->getConnector();

    $response = $connector->post('membersManager',
        'sendPasswordResetLinkEmail',
        [
            'member' => $member->getId(),
            'namespace' => $perunNamespace,
            'url' => $perunUrl,
            'emailAttributeURN' => $emailAttr,
            'language' => LANG_EN
        ]);

    Logger::debug(print_r($response, true));

}