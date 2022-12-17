<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    /**
     * @var string
     */
    public $fromEmail;

    /**
     * @var string
     */
    public $fromName;

    /**
     * @var string
     */
    public $recipients;

    /**
     * The "user agent"
     *
     * @var string
     */
    public $userAgent = 'CodeIgniter';

    /**
     * The mail sending protocol: mail, sendmail, smtp
     *
     * @var string
     */
    public $protocol = 'smtp';

    /**
     * The server path to Sendmail.
     *
     * @var string
     */
    public $mailPath = '/usr/sbin/sendmail';

    /**
     * SMTP Server Address
     *
     * @var string
     */
    public $SMTPHost = 'smtp.mailtrap.io';

    /**
     * SMTP Username
     *
     * @var string
     */
    public $SMTPUser = '94c7df280d62e6';

    /**
     * SMTP Password
     *
     * @var string
     */
    public $SMTPPass = '93bcd6062ef7d4';

    /**
     * SMTP Port
     *
     * @var int
     */
    public $SMTPPort = 2525;

    /**
     * SMTP Timeout (in seconds)
     *
     * @var int
     */
    public $SMTPTimeout = 5;

    /**
     * Enable persistent SMTP connections
     *
     * @var bool
     */
    public $SMTPKeepAlive = false;

    /**
     * SMTP Encryption. Either tls or ssl
     *
     * @var string
     */
    public $SMTPCrypto = 'tls';

    /**
     * Enable word-wrap
     *
     * @var bool
     */
    public $wordWrap = true;

    /**
     * Character count to wrap at
     *
     * @var int
     */
    public $wrapChars = 76;

    /**
     * Type of mail, either 'text' or 'html'
     *
     * @var string
     */
    public $mailType = 'text';

    /**
     * Character set (utf-8, iso-8859-1, etc.)
     *
     * @var string
     */
    public $charset = 'UTF-8';

    /**
     * Whether to validate the email address
     *
     * @var bool
     */
    public $validate = false;

    /**
     * Email Priority. 1 = highest. 5 = lowest. 3 = normal
     *
     * @var int
     */
    public $priority = 3;

    /**
     * Newline character. (Use “\r\n” to comply with RFC 822)
     *
     * @var string
     */
    public $CRLF = "\r\n";

    /**
     * Newline character. (Use “\r\n” to comply with RFC 822)
     *
     * @var string
     */
    public $newline = "\r\n";

    /**
     * Enable BCC Batch Mode.
     *
     * @var bool
     */
    public $BCCBatchMode = false;

    /**
     * Number of emails in each BCC batch
     *
     * @var int
     */
    public $BCCBatchSize = 200;

    /**
     * Enable notify message from server
     *
     * @var bool
     */
    public $DSN = false;
}
