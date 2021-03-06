<?php declare(strict_types=1);

use SimpleSAML\Configuration;

const CONFIG_FILE_NAME = 'module_lsaai.php';
const REGISTER_LINK = 'register_link';

$conf = Configuration::getConfig(CONFIG_FILE_NAME);
$register_link = $conf->getString(REGISTER_LINK);

if (strlen($this->data['username']) > 0) {
    $this->data['autofocus'] = 'password';
} else {
    $this->data['autofocus'] = 'username';
}

/*
 * Support the htmlinject hook, which allows modules to change header, pre and post body on all pages.
 */
$this->data['htmlinject'] = [
    'htmlContentPre' => [],
    'htmlContentPost' => [],
    'htmlContentHead' => [],
];

$jquery = [];
if (array_key_exists('jquery', $this->data)) {
    $jquery = $this->data['jquery'];
}

if (array_key_exists('pageid', $this->data)) {
    $hookinfo = [
        'pre' => &$this->data['htmlinject']['htmlContentPre'],
        'post' => &$this->data['htmlinject']['htmlContentPost'],
        'head' => &$this->data['htmlinject']['htmlContentHead'],
        'jquery' => &$jquery,
        'page' => $this->data['pageid'],
    ];

    SimpleSAML\Module::callHooks('htmlinject', $hookinfo);
}

header('X-Frame-Options: SAMEORIGIN');

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0" />
    <script type="text/javascript" src="/<?php echo $this->data['baseurlpath']; ?>resources/script.js"></script>
    <title>LS Hostel</title>

    <link rel="stylesheet" type="text/css" href="/<?php echo $this->data['baseurlpath']; ?>resources/default.css" />
    <link rel="icon" type="image/icon" href="/<?php echo $this->data['baseurlpath']; ?>resources/icons/favicon.ico" />
    <?php

    if (!empty($this->data['htmlinject']['htmlContentHead'])) {
        foreach ($this->data['htmlinject']['htmlContentHead'] as $c) {
            echo $c;
        }
    }

    if ($this->isLanguageRTL()) {
        ?>
        <link rel="stylesheet" type="text/css" href="/<?php echo $this->data['baseurlpath']; ?>resources/default-rtl.css" />
        <?php
    }
    ?>

    <link rel="stylesheet" type="text/css" href="<?php echo SimpleSAML\Module::getModuleUrl('lsaai/res/bootstrap/css/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo SimpleSAML\Module::getModuleUrl('lsaai/res/css/lsaai.css'); ?>" />

    <meta name="robots" content="noindex, nofollow" />


    <?php
    if (array_key_exists('head', $this->data)) {
        echo '<!-- head -->' . $this->data['head'] . '<!-- /head -->';
    }
    ?>
</head>
<?php
$onLoad = '';
if (array_key_exists('autofocus', $this->data)) {
    $onLoad .= 'SimpleSAML_focus(\'' . $this->data['autofocus'] . '\');';
}
if (isset($this->data['onLoad'])) {
    $onLoad .= $this->data['onLoad'];
}

if ('' !== $onLoad) {
    $onLoad = ' onload="' . $onLoad . '"';
}
?>
<body<?php echo $onLoad; ?>>

<div id="wrap">

    <div id="content" class="content<?php if (null !== $this->data['errorcode']) {
    echo ' content-error';
} ?>">
        <div class="row pl-0 pr-0">
            <div class="col-md-6 col-md-offset-3 logo-wrap">
                <img src="<?php echo SimpleSAML\Module::getModuleUrl('lsaai/res/img/ls_logo.png'); ?>" alt="Life Science Hostel logo">
            </div>
            <div class="col-md-6 col-md-offset-3">
                <h1>
                    <?php
                    echo $this->t('{lsaai:lsaai:user_pass_header}');
                    ?>
                </h1>
                <p><?php echo $this->t('{lsaai:lsaai:user_pass_text}'); ?></p>
                <br>

                <?php
                if (null !== $this->data['errorcode']) {
                    ?>
                    <div class="alert alert-danger" >
                        <p>
                            <span class="glyphicon glyphicon-exclamation-sign" style="float:left; font-size: 38px; margin-right: 10px;"></span>

                            <?php
                            if ('WRONGUSERPASS' === $this->data['errorcode']) {
                                ?>
                                <strong>
                                    <?php
                                    echo htmlspecialchars($this->t(
                                    '{lsaai:lsaai:title_WRONGUSERPASS}',
                                    $this->data['errorparams']
                                )); ?>
                                </strong>
                            </p>
                            <p>
                                <?php
                                echo htmlspecialchars($this->t(
                                    '{lsaai:lsaai:descr_WRONGUSERPASS}',
                                    $this->data['errorparams']
                                )); ?>
                            </p>
                        <?php
                            } else {
                                ?>
                                <strong>
                                    <?php
                                    echo htmlspecialchars($this->t(
                                    '{errors:title_' . $this->data['errorcode'] . '}',
                                    $this->data['errorparams']
                                )); ?>
                                </strong>
                                </p>
                                <p>
                                    <?php
                                    echo htmlspecialchars($this->t(
                                    '{errors:descr_' . $this->data['errorcode'] . '}',
                                    $this->data['errorparams']
                                )); ?>
                                </p>
                            <?php
                            } ?>
                        <a class="btn btn-link" href="<?php echo SimpleSAML\Module::getModuleURL('lsaai/pwd_reset.php'); ?>">
                            <?php echo $this->t('{lsaai:lsaai:forgot_password}'); ?>
                        </a>
                    </div>
                    <?php
                }

                ?>

                <form action="?" method="post" name="f" class="form-horizontal">
                    <div class="form-group">
                        <label class="sr-only" for="inlineFormInputGroup"><?php echo $this->t('{lsaai:lsaai:username}'); ?></label>
                        <div class="input-group mb-2">
                            <span class="input-group-addon" >
                                    <span class=" glyphicon glyphicon-user" id="basic-addon1"></span>
                            </span>
                            <input id="username" name="username" class="form-control" value="<?php echo htmlspecialchars($this->data['username']); ?>" placeholder="Username" aria-describedby="basic-addon1"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="inlineFormInputGroup"><?php echo $this->t('{login:password}'); ?></label>
                        <div class="input-group mb-2">
                            <span class="input-group-addon">
                                <span class=" glyphicon glyphicon-lock" id="basic-addon2"></span>
                            </span>
                            <input id="password" type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon2"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-block" type="submit">
                            <?php echo $this->t('{login:login_button}'); ?>
                        </button>
                    </div>
                    <div class="form-group text-center">
                        <a class="btn btn-link" href="<?php echo $register_link; ?>">
                            <?php echo $this->t('{lsaai:lsaai:register_acc_hostel}'); ?>
                        </a>
<!--                         |-->
<!--                        <a class="btn btn-link" href="--><?php //echo SimpleSAML\Module::getModuleURL("lsaai/pwd_reset.php");?><!--">-->
<!--                            --><?php //echo $this->t('{lsaai:lsaai:forgot_password}')?>
<!--                        </a>-->
                    </div>
                    <?php
                    foreach ($this->data['stateparams'] as $name => $value) {
                        echo '<input type="hidden" name="' . htmlspecialchars($name) . '" value="' . htmlspecialchars(
                            $value
                        ) . '" />';
                    }
                    ?>
                </form>

            </div>
            <?php

        if (!empty($this->data['htmlinject']['htmlContentPre'])) {
            foreach ($this->data['htmlinject']['htmlContentPre'] as $c) {
                echo $c;
            }
        }

$this->includeAtTemplateBase('includes/footer.php');
