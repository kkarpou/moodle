<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'ec2-54-228-174-49.eu-west-1.compute.amazonaws.com:5432';
$CFG->dbname    = 'd4akcsecpetfh2';
$CFG->dbuser    = 'icfojyisuftvxb';
$CFG->dbpass    = 'bd1d6edaf4c2e409171ae66e36c9bb862964615f01247fd67e390fcc7e85122a';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('DATABASE_PORT'),
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://emo-moodle.herokuapp.com/';
$CFG->dataroot  = getenv('DATAROOT');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
