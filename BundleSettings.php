<?php

// InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = true;

$wgEnableUploads = true;

$wgFileExtensions = [
  # Image Formats
  "jpg", "jpeg", "gif", "png", "bmp", "tiff", "tif", "ico", "svg", 'webp', 'heic', 'raw',
  # Video Formats
  "asf", "asx", "wmv", "wmx", "wm", "avi", "divx", "flv", "mov", "qt", "mpeg",
  "mpg", "mpe", "mp4", "m4v", "ogv", "webm", "mkv", "3gp", "3gpp", "3g2", "3gp2",
  # Text formats
  "txt", "md", "csv", "tsv", "ics", "rtx",
  # Audio formats
  "mp3", "m4a", "m4b", "ra", "ram", "wav", "ogg", "oga", "mid", "midi", "wma", "wax", "mka",
  # Misc application formats
  "rtf", "pdf", "tar", "zip", "gz", "gzip", "rar", "7z", "psd", "xcf", "ai",
  # MS Office formats
  "doc", "pot", "pps", "ppt", "wri", "xla", "xls", "xlt", "xlw", "mdb", "mpp", "docx", "docm",
  "dotx", "dotm", "xlsx", "xlsm", "xlsb", "xltx", "xltm", "xlam", "pptx", "pptm", "ppsx", "ppsm",
  "potx", "potm", "ppam", "sldx", "sldm", "onetoc", "onetoc2", "onetmp", "onepkg", "oxps", "xps",
  # OpenOffice formats
  "odt", "odp", "ods", "odg", "odc", "odb", "odf",
  # Code source code formats
  "cpp", "hpp", "h", "c", "cs", "rs", "json"
];
$wgUploadSizeWarning = 1024*1024*20;
$wgMaxUploadSize = 1024*1024*100;

//
//
//   Themes loading
//
//

wfLoadSkin( 'MinervaNeue' );
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Timeless' );
wfLoadSkin( 'Vector' );

//
//
//   Extension loading and configuration
//
//

// https://www.mediawiki.org/wiki/Extension:Contribution_Scores
wfLoadExtension( 'ContributionScores' );
$wgContribScoreIgnoreBots = true;
$wgContribScoreIgnoreBlockedUsers = true;
$wgContribScoresUseRealName = true;
$wgContribScoreDisableCache = false;
$wgContribScoreReports = [
    [ 7, 50 ],
    [ 30, 50 ],
    [ 0, 50 ]
];

// https://www.mediawiki.org/wiki/Extension:LastUserLogin
wfLoadExtension( 'LastUserLogin' );

// https://www.mediawiki.org/wiki/Extension:Maintenance
wfLoadExtension( 'Maintenance' );
$wgGroupPermissions['sysop']['maintenance'] = true;

// https://www.mediawiki.org/wiki/Extension:Iframe
$wgIframe = array();
wfLoadExtension('Iframe');

// https://github.com/StarCitizenWiki/mediawiki-extensions-EmbedVideo
wfLoadExtension( 'EmbedVideo' );
$wgEmbedVideoUseEmbedStyleForLocalVideos = true;

// https://github.com/ProfessionalWiki/Maps
wfLoadExtension( 'Maps' );
$egMapsDefaultService = 'leaflet';
$egMapsGMaps3ApiKey = getenv("GOOGLE_MAPS_API_KEY");

// https://www.mediawiki.org/wiki/Extension:WikiEditor
wfLoadExtension( 'WikiEditor' );
$wgWikiEditorRealtimePreview = true;
$wgHiddenPrefs[] = 'usebetatoolbar';

// https://www.mediawiki.org/wiki/Extension:CodeMirror
wfLoadExtension( 'CodeMirror' );
$wgDefaultUserOptions['usecodemirror'] = true;

// https://www.mediawiki.org/wiki/Extension:TemplateStyles
wfLoadExtension( 'TemplateStyles' );

// https://www.mediawiki.org/wiki/Extension:ParserFunctions
wfLoadExtension( 'ParserFunctions' );
$wgPFEnableStringFunctions = true;

// https://github.com/kuenzign/WikiMarkdown/
wfLoadExtension( 'WikiMarkdown' );

// https://www.mediawiki.org/wiki/Extension:Cite
wfLoadExtension( 'Cite' );

// https://www.mediawiki.org/wiki/Extension:Genealogy
wfLoadExtension( 'Genealogy' );

# // https://www.mediawiki.org/wiki/Extension:Gadgets
# wfLoadExtension( 'Gadgets' );
# $wgGroupPermissions['interface-admin']['gadgets-edit'] = true;
# $wgGroupPermissions['interface-admin']['gadgets-definition-edit'] = true;

// https://www.mediawiki.org/wiki/Extension:MobileFrontend
wfLoadExtension( 'MobileFrontend' );
$wgDefaultMobileSkin = 'minerva';
$wgMFAutodetectMobileView = true;

// https://www.mediawiki.org/wiki/Extension:DarkMode
wfLoadExtension( 'DarkMode' );

// https://www.mediawiki.org/wiki/Extension:Popups
// https://www.mediawiki.org/wiki/Extension:PageImages
// https://www.mediawiki.org/wiki/Extension:TextExtracts
wfLoadExtensions( [
    'TextExtracts',
    'PageImages',
    'Popups'
] );
$wgPopupsHideOptInOnPreferencesPage = true;
$wgPopupsReferencePreviewsBetaFeature = false;


$wgDeprecationReleaseLimit = '1.0';