/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.allowedContent = true;
	config.coreStyles_bold = {element: 'strong'};
	config.coreStyles_italic = {element: 'em'};
	config.htmlEncodeOutput = false;
	config.extraPlugins = 'docViewer,forms';
	config.entities = false;
	config.filebrowserBrowseUrl      = location.protocol + '//' +location.hostname + (location.port ? ':' + location.port : '') + '/backend/assets/js/plugins/editors/ckfinder/ckfinder.html';
	config.filebrowserUploadUrl      = location.protocol + '//' +location.hostname + (location.port ? ':' + location.port : '') + '/backend/assets/js/plugins/editors/ckfinder/connector?command=QuickUpload&type=Files';
	config.filebrowserFlashBrowseUrl = location.protocol + '//' +location.hostname + (location.port ? ':' + location.port : '') + '/backend/assets/js/plugins/editors/ckfinder/ckfinder.html?type=Flash';
	config.filebrowserUploadUrl      = location.protocol + '//' +location.hostname + (location.port ? ':' + location.port : '') + '/backend/assets/js/plugins/editors/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = location.protocol + '//' +location.hostname + (location.port ? ':' + location.port : '') + '/backend/assets/js/plugins/editors/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = location.protocol + '//' +location.hostname + (location.port ? ':' + location.port : '') + '/backend/assets/js/plugins/editors/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

};
