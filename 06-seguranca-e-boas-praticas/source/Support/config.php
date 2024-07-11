<?php

/**
 * DATABASE
 */

const CONF_DB_HOST = "db";
const CONF_DB_USER = "root";
const CONF_DB_PASS = "a654321";
const CONF_DB_NAME = "fsphp";

/**
 * URLs
 */
const CONF_URL_BASE = "http://localhost:8000/06-seguranca-e-boas-praticas/06-08-camada-de-manipulacao-pt3";
const CONF_URL_ADMIN = CONF_URL_BASE . "/admin";
const CONF_URL_ERROR = CONF_URL_BASE . "/404";

/**
 * DATES
 */
const CONF_DATE_BR = "d/m/Y H:i:s";
const CONF_DATE_APP = "Y-m-d H:i:s";

/**
 * SESSION
 */

const CONF_SESSION_PATH = __DIR__ . "/../../storage/session";

/**
 * MESSAGE
 */
const CONF_MESSAGE_CLASS = 'trigger';
const CONF_MESSAGE_INFO = 'info';
const CONF_MESSAGE_SUCCESS = 'success';
const CONF_MESSAGE_WARNING = 'warning';
const CONF_MESSAGE_ERROR = 'error';


/**
 * PASSWORD
 */
const CONF_PASS_MIN_LENGTH = 8;
const CONF_PASS_MAX_LENGTH = 40;

const CONF_PASS_ALGO = PASSWORD_DEFAULT;
const CONF_PASS_OPTION = ['cost' => 10];
