{\rtf1\ansi\ansicpg1252\cocoartf1561\cocoasubrtf200
{\fonttbl\f0\fnil\fcharset0 Menlo-Bold;\f1\fnil\fcharset0 Menlo-Regular;}
{\colortbl;\red255\green255\blue255;\red47\green180\blue29;\red255\green255\blue255;\red0\green0\blue0;
\red64\green11\blue217;\red192\green192\blue192;\red159\green160\blue28;}
{\*\expandedcolortbl;;\cssrgb\c20238\c73898\c14947;\csgray\c100000;\csgray\c0;
\cssrgb\c32308\c18668\c88227;\cssrgb\c79889\c79890\c79889;\cssrgb\c68468\c68012\c14208;}
\paperw12240\paperh20160\margl1440\margr1440\vieww14620\viewh8400\viewkind0
\pard\tx560\tx1120\tx1680\tx2240\tx2800\tx3360\tx3920\tx4480\tx5040\tx5600\tx6160\tx6720\pardirnatural\partightenfactor0

\f0\b\fs22 \cf2 \cb3 \CocoaLigature0 <?php
\f1\b0 \cf4 \

\f0\b \cf5 /** NOTE **
\f1\b0 \cf4 \

\f0\b \cf5  ** Make sure that <?php is the FIRST line of this file!
\f1\b0 \cf4 \

\f0\b \cf5  ** IE: There should NOT be any blank lines or spaces BEFORE <?php
\f1\b0 \cf4 \

\f0\b \cf5  **/
\f1\b0 \cf4 \
\

\f0\b \cf5 /**
\f1\b0 \cf4 \

\f0\b \cf5  * The phpLDAPadmin config file
\f1\b0 \cf4 \

\f0\b \cf5  * See: http://phpldapadmin.sourceforge.net/wiki/index.php/Config.php
\f1\b0 \cf4 \

\f0\b \cf5  *
\f1\b0 \cf4 \

\f0\b \cf5  * This is where you can customise some of the phpLDAPadmin defaults
\f1\b0 \cf4 \

\f0\b \cf5  * that are defined in config_default.php.
\f1\b0 \cf4 \

\f0\b \cf5  *
\f1\b0 \cf4 \

\f0\b \cf5  * To override a default, use the $config->custom variable to do so.
\f1\b0 \cf4 \

\f0\b \cf5  * For example, the default for defining the language in config_default.php
\f1\b0 \cf4 \

\f0\b \cf5  *
\f1\b0 \cf4 \

\f0\b \cf5  * $this->default->appearance['language'] = array(
\f1\b0 \cf4 \

\f0\b \cf5  *  'desc'=>'Language',
\f1\b0 \cf4 \

\f0\b \cf5  *  'default'=>'auto');
\f1\b0 \cf4 \

\f0\b \cf5  *
\f1\b0 \cf4 \

\f0\b \cf5  * to override this, use $config->custom->appearance['language'] = 'en_EN';
\f1\b0 \cf4 \

\f0\b \cf5  *
\f1\b0 \cf4 \

\f0\b \cf5  * This file is also used to configure your LDAP server connections.
\f1\b0 \cf4 \

\f0\b \cf5  *
\f1\b0 \cf4 \

\f0\b \cf5  * You must specify at least one LDAP server there. You may add
\f1\b0 \cf4 \

\f0\b \cf5  * as many as you like. You can also specify your language, and
\f1\b0 \cf4 \

\f0\b \cf5  * many other options.
\f1\b0 \cf4 \

\f0\b \cf5  *
\f1\b0 \cf4 \

\f0\b \cf5  * NOTE: Commented out values in this file prefixed by //, represent the
\f1\b0 \cf4 \

\f0\b \cf5  * defaults that have been defined in config_default.php.
\f1\b0 \cf4 \

\f0\b \cf5  * Commented out values prefixed by #, dont reflect their default value, you can
\f1\b0 \cf4 \

\f0\b \cf5  * check config_default.php if you want to see what the default is.
\f1\b0 \cf4 \

\f0\b \cf5  *
\f1\b0 \cf4 \

\f0\b \cf5  * DONT change config_default.php, you changes will be lost by the next release
\f1\b0 \cf4 \

\f0\b \cf5  * of PLA. Instead change this file - as it will NOT be replaced by a new
\f1\b0 \cf4 \

\f0\b \cf5  * version of phpLDAPadmin.
\f1\b0 \cf4 \

\f0\b \cf5  */
\f1\b0 \cf4 \
\

\f0\b \cf5 /*********************************************
\f1\b0 \cf4 \

\f0\b \cf5  * Useful important configuration overrides  *
\f1\b0 \cf4 \

\f0\b \cf5  *********************************************/\
\
/* If you are asked to put PLA in debug mode, this is how you do it: */
\f1\b0 \cf4 \
#  $config->custom->debug['level'] = 255;\
#  $config->custom->debug['syslog'] = true;\
#  $config->custom->debug['file'] = '/tmp/pla_debug.log';\
\

\f0\b \cf5 /* phpLDAPadmin can encrypt the content of sensitive cookies if you set this
\f1\b0 \cf4 \

\f0\b \cf5    to a big random string. */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->session['blowfish'] = null;
\f1\b0 \cf4 \
\

\f0\b \cf5 /* If your auth_type is http, you can override your HTTP Authentication Realm. */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->session['http_realm'] = sprintf('%s %s',app_name(),'login');
\f1\b0 \cf4 \
\

\f0\b \cf5 /* The language setting. If you set this to 'auto', phpLDAPadmin will attempt
\f1\b0 \cf4 \

\f0\b \cf5    to determine your language automatically.
\f1\b0 \cf4 \

\f0\b \cf5    If PLA doesnt show (all) strings in your language, then you can do some
\f1\b0 \cf4 \

\f0\b \cf5    translation at http://translations.launchpad.net/phpldapadmin and download
\f1\b0 \cf4 \

\f0\b \cf5    the translation files, replacing those provided with PLA.
\f1\b0 \cf4 \

\f0\b \cf5    (We'll pick up the translations before making the next release too!) */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->appearance['language'] = 'auto';\
\
/* The temporary storage directory where we will put jpegPhoto data
\f1\b0 \cf4 \

\f0\b \cf5    This directory must be readable and writable by your web server. */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->jpeg['tmpdir'] = '/tmp';     // Example for Unix systems
\f1\b0 \cf4 \
#  $config->custom->jpeg['tmpdir'] = 'c:\\\\temp'; 
\f0\b \cf5 // Example for Windows systems
\f1\b0 \cf4 \
\

\f0\b \cf5 /* Set this to (bool)true if you do NOT want a random salt used when
\f1\b0 \cf4 \

\f0\b \cf5    calling crypt().  Instead, use the first two letters of the user's
\f1\b0 \cf4 \

\f0\b \cf5    password.  This is insecure but unfortunately needed for some older
\f1\b0 \cf4 \

\f0\b \cf5    environments. */
\f1\b0 \cf4 \
#  $config->custom->password['no_random_crypt_salt'] = true;\
\

\f0\b \cf5 /* PHP script timeout control. If php runs longer than this many seconds then
\f1\b0 \cf4 \

\f0\b \cf5    PHP will stop with an Maximum Execution time error. Increase this value from
\f1\b0 \cf4 \

\f0\b \cf5    the default if queries to your LDAP server are slow. The default is either
\f1\b0 \cf4 \

\f0\b \cf5    30 seconds or the setting of max_exection_time if this is null. */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->session['timelimit'] = 30;
\f1\b0 \cf4 \
\

\f0\b \cf5 /* Our local timezone
\f1\b0 \cf4 \

\f0\b \cf5    This is to make sure that when we ask the system for the current time, we
\f1\b0 \cf4 \

\f0\b \cf5    get the right local time. If this is not set, all time() calculations will
\f1\b0 \cf4 \

\f0\b \cf5    assume UTC if you have not set PHP date.timezone. */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->appearance['timezone'] = null;
\f1\b0 \cf4 \
#  $config->custom->appearance['timezone'] = 'Australia/Melbourne';\
\

\f0\b \cf5 /*********************************************
\f1\b0 \cf4 \

\f0\b \cf5  * Commands
\f1\b0 \cf4                                   
\f0\b \cf5 *
\f1\b0 \cf4 \

\f0\b \cf5  *********************************************/
\f1\b0 \cf4 \
\

\f0\b \cf5 /* Command availability ; if you don't authorize a command the command
\f1\b0 \cf4 \

\f0\b \cf5    links will not be shown and the command action will not be permitted.
\f1\b0 \cf4 \

\f0\b \cf5    For better security, set also ACL in your ldap directory. */
\f1\b0 \cf4 \

\f0\b \cf5 /*
\f1\b0 \cf4 \

\f0\b \cf5 $config->custom->commands['cmd'] = array(
\f1\b0 \cf4 \

\f0\b \cf5         'entry_internal_attributes_show' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'entry_refresh' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'oslinks' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'switch_template' => true
\f1\b0 \cf4 \

\f0\b \cf5 );
\f1\b0 \cf4 \

\f0\b \cf5 \
\
$config->custom->commands['script'] = array(
\f1\b0 \cf4 \

\f0\b \cf5         'add_attr_form' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'add_oclass_form' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'add_value_form' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'collapse' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'compare' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'compare_form' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'copy' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'copy_form' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'create' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'create_confirm' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'delete' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'delete_attr' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'delete_form' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'draw_tree_node' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'expand' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'export' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'export_form' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'import' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'import_form' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'login' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'logout' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'login_form' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'mass_delete' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'mass_edit' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'mass_update' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'modify_member_form' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'monitor' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'purge_cache' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'query_engine' => true,\
        'rename' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'rename_form' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'rdelete' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'refresh' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'schema' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'server_info' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'show_cache' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'template_engine' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'update_confirm' => true,
\f1\b0 \cf4 \

\f0\b \cf5         'update' => true
\f1\b0 \cf4 \

\f0\b \cf5 );
\f1\b0 \cf4 \

\f0\b \cf5 */\
\
/*********************************************
\f1\b0 \cf4 \

\f0\b \cf5  * Appearance
\f1\b0 \cf4                                 
\f0\b \cf5 *
\f1\b0 \cf4 \

\f0\b \cf5  *********************************************/
\f1\b0 \cf4 \
\

\f0\b \cf5 /* If you want to choose the appearance of the tree, specify a class name which
\f1\b0 \cf4 \

\f0\b \cf5    inherits from the Tree class. */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->appearance['tree'] = 'AJAXTree';
\f1\b0 \cf4 \
#  $config->custom->appearance['tree'] = 'HTMLTree';\
\

\f0\b \cf5 /* Just show your custom templates. */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->appearance['custom_templates_only'] = false;
\f1\b0 \cf4 \
\

\f0\b \cf5 /* Disable the default template. */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->appearance['disable_default_template'] = false;
\f1\b0 \cf4 \
\

\f0\b \cf5 /* Hide the warnings for invalid objectClasses/attributes in templates. */
\f1\b0 \cf4 \
$config->custom->appearance['hide_template_warning'] = true;\
\

\f0\b \cf5 /* Set to true if you would like to hide header and footer parts. */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->appearance['minimalMode'] = false;
\f1\b0 \cf4 \
\

\f0\b \cf5 /* Configure what objects are shown in left hand tree */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->appearance['tree_filter'] = '(objectclass=*)';
\f1\b0 \cf4 \
\

\f0\b \cf5 /* The height and width of the tree. If these values are not set, then
\f1\b0 \cf4 \

\f0\b \cf5    no tree scroll bars are provided. */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->appearance['tree_height'] = null;
\f1\b0 \cf4 \
#  $config->custom->appearance['tree_height'] = 600;\

\f0\b \cf5 // $config->custom->appearance['tree_width'] = null;
\f1\b0 \cf4 \
#  $config->custom->appearance['tree_width'] = 250;\
\

\f0\b \cf5 /* Confirm create and update operations, allowing you to review the changes
\f1\b0 \cf4 \

\f0\b \cf5    and optionally skip attributes during the create/update operation. */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->confirm['create'] = true;
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->confirm['update'] = true;
\f1\b0 \cf4 \
\

\f0\b \cf5 /* Confirm copy operations, and treat them like create operations. This allows
\f1\b0 \cf4 \

\f0\b \cf5    you to edit the attributes (thus changing any that might conflict with
\f1\b0 \cf4 \

\f0\b \cf5    uniqueness) before creating the new entry. */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->confirm['copy'] = true;
\f1\b0 \cf4 \
\

\f0\b \cf5 /*********************************************
\f1\b0 \cf4 \

\f0\b \cf5  * User-friendly attribute translation       *
\f1\b0 \cf4 \

\f0\b \cf5  *********************************************/\
\
/* Use this array to map attribute names to user friendly names. For example, if
\f1\b0 \cf4 \

\f0\b \cf5    you don't want to see "facsimileTelephoneNumber" but rather "Fax". */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->appearance['friendly_attrs'] = array();
\f1\b0 \cf4 \
$config->custom->appearance['friendly_attrs'] = \cf6 \cb3 array(\cf4 \cb3 \
        'facsimileTelephoneNumber' => 'Fax',\
        'gid'                      => 'Group',\
        'mail'                     => 'Email',\
        'telephoneNumber'          => 'Telephone',\
        'uid'                      => 'User Name',\
        'userPassword'             => 'Password'\
);\
\

\f0\b \cf5 /*********************************************
\f1\b0 \cf4 \

\f0\b \cf5  * Hidden attributes
\f1\b0 \cf4                          
\f0\b \cf5 *
\f1\b0 \cf4 \

\f0\b \cf5  *********************************************/
\f1\b0 \cf4 \
\

\f0\b \cf5 /* You may want to hide certain attributes from being edited. If you want to
\f1\b0 \cf4 \

\f0\b \cf5    hide attributes from the user, you should use your LDAP servers ACLs.
\f1\b0 \cf4 \

\f0\b \cf5    NOTE: The user must be able to read the hide_attrs_exempt entry to be
\f1\b0 \cf4 \

\f0\b \cf5    excluded. */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->appearance['hide_attrs'] = array();
\f1\b0 \cf4 \
#  $config->custom->appearance['hide_attrs'] = \cf6 \cb3 array(\cf4 \cb3 'objectClass');\
\

\f0\b \cf5 /* Members of this list will be exempt from the hidden attributes. */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->appearance['hide_attrs_exempt'] = null;
\f1\b0 \cf4 \
#  $config->custom->appearance['hide_attrs_exempt'] = 'cn=PLA UnHide,ou=Groups,c=AU';\
\

\f0\b \cf5 /*********************************************
\f1\b0 \cf4 \

\f0\b \cf5  * Read-only attributes
\f1\b0 \cf4                       
\f0\b \cf5 *
\f1\b0 \cf4 \

\f0\b \cf5  *********************************************/\
/* You may want to phpLDAPadmin to display certain attributes as read only,
\f1\b0 \cf4 \

\f0\b \cf5    meaning that users will not be presented a form for modifying those
\f1\b0 \cf4 \

\f0\b \cf5    attributes, and they will not be allowed to be modified on the "back-end"
\f1\b0 \cf4 \

\f0\b \cf5    either. You may configure this list here:
\f1\b0 \cf4 \

\f0\b \cf5    NOTE: The user must be able to read the readonly_attrs_exempt entry to be
\f1\b0 \cf4 \

\f0\b \cf5    excluded. */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->appearance['readonly_attrs'] = array();
\f1\b0 \cf4 \
\

\f0\b \cf5 /* Members of this list will be exempt from the readonly attributes. */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->appearance['readonly_attrs_exempt'] = null;
\f1\b0 \cf4 \
#  $config->custom->appearance['readonly_attrs_exempt'] = 'cn=PLA ReadWrite,ou=Groups,c=AU';\
\

\f0\b \cf5 /*********************************************
\f1\b0 \cf4 \

\f0\b \cf5  * Group attributes
\f1\b0 \cf4                           
\f0\b \cf5 *
\f1\b0 \cf4 \

\f0\b \cf5  *********************************************/\
\
/* Add "modify group members" link to the attribute. */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->modify_member['groupattr'] = array('member','uniqueMember','memberUid');
\f1\b0 \cf4 \
\

\f0\b \cf5 /* Configure filter for member search. This only applies to "modify group members" feature */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->modify_member['filter'] = '(objectclass=Person)';
\f1\b0 \cf4 \
\

\f0\b \cf5 /* Attribute that is added to the group member attribute. */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->modify_member['attr'] = 'dn';
\f1\b0 \cf4 \
\

\f0\b \cf5 /* For Posix attributes */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->modify_member['posixattr'] = 'uid';
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->modify_member['posixfilter'] = '(uid=*)';
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->modify_member['posixgroupattr'] = 'memberUid';
\f1\b0 \cf4 \
\

\f0\b \cf5 /*********************************************
\f1\b0 \cf4 \

\f0\b \cf5  * Support for attrs display order           *
\f1\b0 \cf4 \

\f0\b \cf5  *********************************************/\
\
/* Use this array if you want to have your attributes displayed in a specific
\f1\b0 \cf4 \

\f0\b \cf5    order. You can use default attribute names or their fridenly names.
\f1\b0 \cf4 \

\f0\b \cf5    For example, "sn" will be displayed right after "givenName". All the other
\f1\b0 \cf4 \

\f0\b \cf5    attributes that are not specified in this array will be displayed after in
\f1\b0 \cf4 \

\f0\b \cf5    alphabetical order. */
\f1\b0 \cf4 \

\f0\b \cf5 // $config->custom->appearance['attr_display_order'] = array();
\f1\b0 \cf4 \
#  $config->custom->appearance['attr_display_order'] = \cf6 \cb3 array(\cf4 \cb3 \
#   'givenName',\
#   'sn',\
#   'cn',\
#   'displayName',\
#   'uid',\
#   'uidNumber',\
#   'gidNumber',\
#   'homeDirectory',\
#   'mail',\
#   'userPassword'\
#  );\
\

\f0\b \cf5 /*********************************************
\f1\b0 \cf4 \

\f0\b \cf5  * Define your LDAP servers in this section  *
\f1\b0 \cf4 \

\f0\b \cf5  *********************************************/\
\

\f1\b0 \cf4 $servers = 
\f0\b \cf7 \cb3 new
\f1\b0 \cf4 \cb3  Datastore();\
\

\f0\b \cf5 /* $servers->NewServer('ldap_pla') must be called before each new LDAP server
\f1\b0 \cf4 \

\f0\b \cf5    declaration. */
\f1\b0 \cf4 \
$servers->newServer('ldap_pla');\
\

\f0\b \cf5 /* A convenient name that will appear in the tree viewer and throughout
\f1\b0 \cf4 \

\f0\b \cf5    phpLDAPadmin to identify this LDAP server to users. */
\f1\b0 \cf4 \
$servers->setValue('server','name','IT610 LDAP Server');\
\

\f0\b \cf5 /* Examples:
\f1\b0 \cf4 \

\f0\b \cf5    'ldap.example.com',
\f1\b0 \cf4 \

\f0\b \cf5    'ldaps://ldap.example.com/',
\f1\b0 \cf4 \

\f0\b \cf5    'ldapi://%2fusr%local%2fvar%2frun%2fldapi'
\f1\b0 \cf4 \

\f0\b \cf5            (Unix socket at /usr/local/var/run/ldap) */
\f1\b0 \cf4 \
$servers->setValue('server','host','172.31.37.64');\
\

\f0\b \cf5 /* The port your LDAP server listens on (no quotes). 389 is standard. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('server','port',389);
\f1\b0 \cf4 \
\

\f0\b \cf5 /* Array of base DNs of your LDAP server. Leave this blank to have phpLDAPadmin
\f1\b0 \cf4 \

\f0\b \cf5    auto-detect it for you. */
\f1\b0 \cf4 \
$servers->setValue('server','base',\cf6 \cb3 array(\cf4 \cb3 'dc=ldap,dc=com'));\
\

\f0\b \cf5 /* Five options for auth_type:
\f1\b0 \cf4 \

\f0\b \cf5    1. 'cookie': you will login via a web form, and a client-side cookie will
\f1\b0 \cf4 \

\f0\b \cf5       store your login dn and password.
\f1\b0 \cf4 \

\f0\b \cf5    2. 'session': same as cookie but your login dn and password are stored on the
\f1\b0 \cf4 \

\f0\b \cf5       web server in a persistent session variable.
\f1\b0 \cf4 \

\f0\b \cf5    3. 'http': same as session but your login dn and password are retrieved via
\f1\b0 \cf4 \

\f0\b \cf5       HTTP authentication.
\f1\b0 \cf4 \

\f0\b \cf5    4. 'config': specify your login dn and password here in this config file. No
\f1\b0 \cf4 \

\f0\b \cf5       login will be required to use phpLDAPadmin for this server.
\f1\b0 \cf4 \

\f0\b \cf5    5. 'sasl': login will be taken from the webserver's kerberos authentication.
\f1\b0 \cf4 \

\f0\b \cf5       Currently only GSSAPI has been tested (using mod_auth_kerb).
\f1\b0 \cf4 \
\

\f0\b \cf5    Choose wisely to protect your authentication information appropriately for
\f1\b0 \cf4 \

\f0\b \cf5    your situation. If you choose 'cookie', your cookie contents will be
\f1\b0 \cf4 \

\f0\b \cf5    encrypted using blowfish and the secret your specify above as
\f1\b0 \cf4 \

\f0\b \cf5    session['blowfish']. */
\f1\b0 \cf4 \
$servers->setValue('login','auth_type','session');\
\

\f0\b \cf5 /* The DN of the user for phpLDAPadmin to bind with. For anonymous binds or
\f1\b0 \cf4 \

\f0\b \cf5    'cookie','session' or 'sasl' auth_types, LEAVE THE LOGIN_DN AND LOGIN_PASS
\f1\b0 \cf4 \

\f0\b \cf5    BLANK. If you specify a login_attr in conjunction with a cookie or session
\f1\b0 \cf4 \

\f0\b \cf5    auth_type, then you can also specify the bind_id/bind_pass here for searching
\f1\b0 \cf4 \

\f0\b \cf5    the directory for users (ie, if your LDAP server does not allow anonymous
\f1\b0 \cf4 \

\f0\b \cf5    binds. */
\f1\b0 \cf4 \
$servers->setValue('login','bind_id','cn=admin,dc=ldap,dc=com');\
#  $servers->setValue('login','bind_id','cn=Manager,dc=example,dc=com');\
\

\f0\b \cf5 /* Your LDAP password. If you specified an empty bind_id above, this MUST also
\f1\b0 \cf4 \

\f0\b \cf5    be blank. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('login','bind_pass','');
\f1\b0 \cf4 \
#  $servers->setValue('login','bind_pass','secret');\
\

\f0\b \cf5 /* Use TLS (Transport Layer Security) to connect to the LDAP server. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('server','tls',false);
\f1\b0 \cf4 \
\

\f0\b \cf5 /************************************
\f1\b0 \cf4 \

\f0\b \cf5  *      SASL Authentication         *
\f1\b0 \cf4 \

\f0\b \cf5  ************************************/
\f1\b0 \cf4 \
\

\f0\b \cf5 /* Enable SASL authentication LDAP SASL authentication requires PHP 5.x
\f1\b0 \cf4 \

\f0\b \cf5    configured with --with-ldap-sasl=DIR. If this option is disabled (ie, set to
\f1\b0 \cf4 \

\f0\b \cf5    false), then all other sasl options are ignored. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('login','auth_type','sasl');
\f1\b0 \cf4 \
\

\f0\b \cf5 /* SASL auth mechanism */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('sasl','mech','GSSAPI');
\f1\b0 \cf4 \
\

\f0\b \cf5 /* SASL authentication realm name */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('sasl','realm','');
\f1\b0 \cf4 \
#  $servers->setValue('sasl','realm','EXAMPLE.COM');\
\

\f0\b \cf5 /* SASL authorization ID name
\f1\b0 \cf4 \

\f0\b \cf5    If this option is undefined, authorization id will be computed from bind DN,
\f1\b0 \cf4 \

\f0\b \cf5    using authz_id_regex and authz_id_replacement. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('sasl','authz_id', null);
\f1\b0 \cf4 \
\

\f0\b \cf5 /* SASL authorization id regex and replacement
\f1\b0 \cf4 \

\f0\b \cf5    When authz_id property is not set (default), phpLDAPAdmin will try to
\f1\b0 \cf4 \

\f0\b \cf5    figure out authorization id by itself from bind distinguished name (DN).
\f1\b0 \cf4 \
\

\f0\b \cf5    This procedure is done by calling preg_replace() php function in the
\f1\b0 \cf4 \

\f0\b \cf5    following way:
\f1\b0 \cf4 \
\

\f0\b \cf5    $authz_id = preg_replace($sasl_authz_id_regex,$sasl_authz_id_replacement,
\f1\b0 \cf4 \

\f0\b \cf5     $bind_dn);
\f1\b0 \cf4 \
\

\f0\b \cf5    For info about pcre regexes, see:
\f1\b0 \cf4 \

\f0\b \cf5    - pcre(3), perlre(3)
\f1\b0 \cf4 \

\f0\b \cf5    - http://www.php.net/preg_replace */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('sasl','authz_id_regex',null);
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('sasl','authz_id_replacement',null);
\f1\b0 \cf4 \
#  $servers->setValue('sasl','authz_id_regex','/^uid=([^,]+)(.+)/i');\
#  $servers->setValue('sasl','authz_id_replacement','$1');\
\

\f0\b \cf5 /* SASL auth security props.
\f1\b0 \cf4 \

\f0\b \cf5    See http://beepcore-tcl.sourceforge.net/tclsasl.html#anchor5 for explanation. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('sasl','props',null);
\f1\b0 \cf4 \
\

\f0\b \cf5 /* Default password hashing algorithm. One of md5, ssha, sha, md5crpyt, smd5,
\f1\b0 \cf4 \

\f0\b \cf5    blowfish, crypt or leave blank for now default algorithm. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('appearance','password_hash_custom','md5');
\f1\b0 \cf4 \
\

\f0\b \cf5 /* If you specified 'cookie' or 'session' as the auth_type above, you can
\f1\b0 \cf4 \

\f0\b \cf5    optionally specify here an attribute to use when logging in. If you enter
\f1\b0 \cf4 \

\f0\b \cf5    'uid' and login as 'dsmith', phpLDAPadmin will search for (uid=dsmith)
\f1\b0 \cf4 \

\f0\b \cf5    and log in as that user.
\f1\b0 \cf4 \

\f0\b \cf5    Leave blank or specify 'dn' to use full DN for logging in. Note also that if
\f1\b0 \cf4 \

\f0\b \cf5    your LDAP server requires you to login to perform searches, you can enter the
\f1\b0 \cf4 \

\f0\b \cf5    DN to use when searching in 'bind_id' and 'bind_pass' above. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('login','attr','dn');
\f1\b0 \cf4 \

\f0\b \cf5 /* Base DNs to used for logins. If this value is not set, then the LDAP server
\f1\b0 \cf4 \

\f0\b \cf5    Base DNs are used. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('login','base',array());
\f1\b0 \cf4 \
\

\f0\b \cf5 /* If 'login,attr' is used above such that phpLDAPadmin will search for your DN
\f1\b0 \cf4 \

\f0\b \cf5    at login, you may restrict the search to a specific objectClasses. EG, set this
\f1\b0 \cf4 \

\f0\b \cf5    to array('posixAccount') or array('inetOrgPerson',..), depending upon your
\f1\b0 \cf4 \

\f0\b \cf5    setup. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('login','class',array());
\f1\b0 \cf4 \
\

\f0\b \cf5 /* If you specified something different from 'dn', for example 'uid', as the
\f1\b0 \cf4 \

\f0\b \cf5    login_attr above, you can optionally specify here to fall back to
\f1\b0 \cf4 \

\f0\b \cf5    authentication with dn.
\f1\b0 \cf4 \

\f0\b \cf5    This is useful, when users should be able to log in with their uid, but
\f1\b0 \cf4 \

\f0\b \cf5    the ldap administrator wants to log in with his root-dn, that does not
\f1\b0 \cf4 \

\f0\b \cf5    necessarily have the uid attribute.
\f1\b0 \cf4 \

\f0\b \cf5    When using this feature, login_class is ignored. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('login','fallback_dn',false);
\f1\b0 \cf4 \
\

\f0\b \cf5 /* Specify true If you want phpLDAPadmin to not display or permit any
\f1\b0 \cf4 \

\f0\b \cf5    modification to the LDAP server. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('server','read_only',false);
\f1\b0 \cf4 \
\

\f0\b \cf5 /* Specify false if you do not want phpLDAPadmin to draw the 'Create new' links
\f1\b0 \cf4 \

\f0\b \cf5    in the tree viewer. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('appearance','show_create',true);
\f1\b0 \cf4 \
\

\f0\b \cf5 /* Set to true if you would like to initially open the first level of each tree. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('appearance','open_tree',false);
\f1\b0 \cf4 \
\

\f0\b \cf5 /* This feature allows phpLDAPadmin to automatically determine the next
\f1\b0 \cf4 \

\f0\b \cf5    available uidNumber for a new entry. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('auto_number','enable',true);
\f1\b0 \cf4 \
\

\f0\b \cf5 /* The mechanism to use when finding the next available uidNumber. Two possible
\f1\b0 \cf4 \

\f0\b \cf5    values: 'uidpool' or 'search'.
\f1\b0 \cf4 \

\f0\b \cf5    The 'uidpool' mechanism uses an existing uidPool entry in your LDAP server to
\f1\b0 \cf4 \

\f0\b \cf5    blindly lookup the next available uidNumber. The 'search' mechanism searches
\f1\b0 \cf4 \

\f0\b \cf5    for entries with a uidNumber value and finds the first available uidNumber
\f1\b0 \cf4 \

\f0\b \cf5    (slower). */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('auto_number','mechanism','search');\
\
/* The DN of the search base when the 'search' mechanism is used above. */
\f1\b0 \cf4 \
#  $servers->setValue('auto_number','search_base','ou=People,dc=example,dc=com');\
\

\f0\b \cf5 /* The minimum number to use when searching for the next available number
\f1\b0 \cf4 \

\f0\b \cf5    (only when 'search' is used for auto_number. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('auto_number','min',array('uidNumber'=>1000,'gidNumber'=>500));
\f1\b0 \cf4 \
\

\f0\b \cf5 /* If you set this, then phpldapadmin will bind to LDAP with this user ID when
\f1\b0 \cf4 \

\f0\b \cf5    searching for the uidnumber. The idea is, this user id would have full
\f1\b0 \cf4 \

\f0\b \cf5    (readonly) access to uidnumber in your ldap directory (the logged in user
\f1\b0 \cf4 \

\f0\b \cf5    may not), so that you can be guaranteed to get a unique uidnumber for your
\f1\b0 \cf4 \

\f0\b \cf5    directory. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('auto_number','dn',null);
\f1\b0 \cf4 \
\

\f0\b \cf5 /* The password for the dn above. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('auto_number','pass',null);
\f1\b0 \cf4 \
\

\f0\b \cf5 /* Enable anonymous bind login. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('login','anon_bind',true);
\f1\b0 \cf4 \
\

\f0\b \cf5 /* Use customized page with prefix when available. */
\f1\b0 \cf4 \
#  $servers->setValue('custom','pages_prefix','custom_');\
\

\f0\b \cf5 /* If you set this, then only these DNs are allowed to log in. This array can
\f1\b0 \cf4 \

\f0\b \cf5    contain individual users, groups or ldap search filter(s). Keep in mind that
\f1\b0 \cf4 \

\f0\b \cf5    the user has not authenticated yet, so this will be an anonymous search to
\f1\b0 \cf4 \

\f0\b \cf5    the LDAP server, so make your ACLs allow these searches to return results! */
\f1\b0 \cf4 \
#  $servers->setValue('login','allowed_dns',\cf6 \cb3 array(\cf4 \cb3 \
#   'uid=stran,ou=People,dc=example,dc=com',\
#   '(&(gidNumber=811)(objectClass=groupOfNames))',\
#   '(|(uidNumber=200)(uidNumber=201))',\
#   'cn=callcenter,ou=Group,dc=example,dc=com'));\
\

\f0\b \cf5 /* Set this if you dont want this LDAP server to show in the tree */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('server','visible',true);
\f1\b0 \cf4 \
\

\f0\b \cf5 /* Set this if you want to hide the base DNs that dont exist instead of
\f1\b0 \cf4 \

\f0\b \cf5    displaying the message "The base entry doesnt exist, create it?"
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('server','hide_noaccess_base',false);
\f1\b0 \cf4 \

\f0\b \cf5 #  $servers->setValue('server','hide_noaccess_base',true);
\f1\b0 \cf4 \
\

\f0\b \cf5 /* This is the time out value in minutes for the server. After as many minutes
\f1\b0 \cf4 \

\f0\b \cf5    of inactivity you will be automatically logged out. If not set, the default
\f1\b0 \cf4 \

\f0\b \cf5    value will be ( session_cache_expire()-1 ) */
\f1\b0 \cf4 \
#  $servers->setValue('login','timeout',30);\
\

\f0\b \cf5 /* Set this if you want phpldapadmin to perform rename operation on entry which
\f1\b0 \cf4 \

\f0\b \cf5    has children. Certain servers are known to allow it, certain are not. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('server','branch_rename',false);
\f1\b0 \cf4 \
\

\f0\b \cf5 /* If you set this, then phpldapadmin will show these attributes as
\f1\b0 \cf4 \

\f0\b \cf5    internal attributes, even if they are not defined in your schema. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('server','custom_sys_attrs',array(''));
\f1\b0 \cf4 \
#  $servers->setValue('server','custom_sys_attrs',\cf6 \cb3 array(\cf4 \cb3 'passwordExpirationTime','passwordAllowChangeTime'));\
\

\f0\b \cf5 /* If you set this, then phpldapadmin will show these attributes on
\f1\b0 \cf4 \

\f0\b \cf5    objects, even if they are not defined in your schema. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('server','custom_attrs',array(''));
\f1\b0 \cf4 \
#  $servers->setValue('server','custom_attrs',\cf6 \cb3 array(\cf4 \cb3 'nsRoleDN','nsRole','nsAccountLock'));\
\

\f0\b \cf5 /* These attributes will be forced to MAY attributes and become option in the
\f1\b0 \cf4 \

\f0\b \cf5    templates. If they are not defined in the templates, then they wont appear
\f1\b0 \cf4 \

\f0\b \cf5    as per normal template processing. You may want to do this because your LDAP
\f1\b0 \cf4 \

\f0\b \cf5    server may automatically calculate a default value.
\f1\b0 \cf4 \

\f0\b \cf5    In Fedora Directory Server using the DNA Plugin one could ignore uidNumber,
\f1\b0 \cf4 \

\f0\b \cf5    gidNumber and sambaSID. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('server','force_may',array(''));
\f1\b0 \cf4 \
#  $servers->setValue('server','force_may',\cf6 \cb3 array(\cf4 \cb3 'uidNumber','gidNumber','sambaSID'));\
\

\f0\b \cf5 /*********************************************
\f1\b0 \cf4 \

\f0\b \cf5  * Unique attributes
\f1\b0 \cf4                          
\f0\b \cf5 *
\f1\b0 \cf4 \

\f0\b \cf5  *********************************************/
\f1\b0 \cf4 \
\

\f0\b \cf5 /* You may want phpLDAPadmin to enforce some attributes to have unique values
\f1\b0 \cf4 \

\f0\b \cf5    (ie: not belong to other entries in your tree. This (together with
\f1\b0 \cf4 \

\f0\b \cf5    'unique','dn' and 'unique','pass' option will not let updates to
\f1\b0 \cf4 \

\f0\b \cf5    occur with other attributes have the same value. */
\f1\b0 \cf4 \
#  $servers->setValue('unique','attrs',\cf6 \cb3 array(\cf4 \cb3 'mail','uid','uidNumber'));\
\

\f0\b \cf5 /* If you set this, then phpldapadmin will bind to LDAP with this user ID when
\f1\b0 \cf4 \

\f0\b \cf5    searching for attribute uniqueness. The idea is, this user id would have full
\f1\b0 \cf4 \

\f0\b \cf5    (readonly) access to your ldap directory (the logged in user may not), so
\f1\b0 \cf4 \

\f0\b \cf5    that you can be guaranteed to get a unique uidnumber for your directory. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('unique','dn',null);
\f1\b0 \cf4 \
\

\f0\b \cf5 /* The password for the dn above. */
\f1\b0 \cf4 \

\f0\b \cf5 // $servers->setValue('unique','pass',null);
\f1\b0 \cf4 \
\

\f0\b \cf5 /**************************************************************************
\f1\b0 \cf4 \

\f0\b \cf5  * If you want to configure additional LDAP servers, do so below.         *
\f1\b0 \cf4 \

\f0\b \cf5  * Remove the commented lines and use this section as a template for all  *
\f1\b0 \cf4 \

\f0\b \cf5  * your other LDAP servers.
\f1\b0 \cf4                                                
\f0\b \cf5 *
\f1\b0 \cf4 \

\f0\b \cf5  **************************************************************************/\
\
/*
\f1\b0 \cf4 \

\f0\b \cf5 $servers->newServer('ldap_pla');
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('server','name','LDAP Server');
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('server','host','127.0.0.1');
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('server','port',389);
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('server','base',array(''));
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('login','auth_type','cookie');
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('login','bind_id','');
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('login','bind_pass','');
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('server','tls',false);
\f1\b0 \cf4 \
\

\f0\b \cf5 # SASL auth
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('login','auth_type','sasl');
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('sasl','mech','GSSAPI');
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('sasl','realm','EXAMPLE.COM');
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('sasl','authz_id',null);
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('sasl','authz_id_regex','/^uid=([^,]+)(.+)/i');
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('sasl','authz_id_replacement','$1');
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('sasl','props',null);
\f1\b0 \cf4 \
\

\f0\b \cf5 $servers->setValue('appearance','password_hash_custom','md5');
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('login','attr','dn');
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('login','fallback_dn',false);
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('login','class',null);
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('server','read_only',false);
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('appearance','show_create',true);
\f1\b0 \cf4 \
\

\f0\b \cf5 $servers->setValue('auto_number','enable',true);
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('auto_number','mechanism','search');
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('auto_number','search_base',null);
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('auto_number','min',array('uidNumber'=>1000,'gidNumber'=>500));
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('auto_number','dn',null);
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('auto_number','pass',null);
\f1\b0 \cf4 \
\

\f0\b \cf5 $servers->setValue('login','anon_bind',true);
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('custom','pages_prefix','custom_');
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('unique','attrs',array('mail','uid','uidNumber'));
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('unique','dn',null);
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('unique','pass',null);\
$servers->setValue('server','visible',true);
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('login','timeout',30);
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('server','branch_rename',false);
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('server','custom_sys_attrs',array('passwordExpirationTime','passwordAllowChangeTime'));
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('server','custom_attrs',array('nsRoleDN','nsRole','nsAccountLock'));
\f1\b0 \cf4 \

\f0\b \cf5 $servers->setValue('server','force_may',array('uidNumber','gidNumber','sambaSID'));
\f1\b0 \cf4 \

\f0\b \cf5 */
\f1\b0 \cf4 \

\f0\b \cf2 ?>
\f1\b0 \cf4 \
\
\
\

\f0\b \cf5 \
\
}