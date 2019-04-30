CKEDITOR.plugins.addExternal('aboutTemplates', '/admin/ckeditor/plugins/aboutTemplates/');
CKEDITOR.plugins.addExternal('showblocks', '/admin/ckeditor/plugins/showblocks/');
CKEDITOR.plugins.addExternal('nbsp', '/admin/ckeditor/plugins/nbsp/');
CKEDITOR.plugins.addExternal('iframe', '/admin/ckeditor/plugins/iframe/');
CKEDITOR.plugins.addExternal('codemirror', '/admin/ckeditor/plugins/codemirror/');
CKEDITOR.plugins.addExternal('preview', '/admin/ckeditor/plugins/preview/');
CKEDITOR.plugins.addExternal('widget', '/admin/ckeditor/plugins/widget/');
CKEDITOR.plugins.addExternal('lineutils', '/admin/ckeditor/plugins/lineutils/');
CKEDITOR.plugins.addExternal('gallery', '/admin/ckeditor/plugins/gallery/');

CKEDITOR.editorConfig = function (config) {
    config.contentsCss = '/css/style.css';
    config.allowedContent = true;
    config.language = 'ru';
    config.templates_files = [ CKEDITOR.getUrl( '/admin/ckeditor/plugins/aboutTemplates/templates/mytemplates.js' ) ];
    config.extraPlugins = 'aboutTemplates,showblocks,preview,gallery';

    config.toolbar = [
        {
            name: 'document',
            groups: [ 'mode', 'document', 'doctools' ],
            items: [ 'Source', 'Preview', 'Templates', 'Gallery', 'ShowBlocks' ]
        },
        {
            name: 'clipboard',
            groups: [ 'clipboard', 'undo' ],
            items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ]
        },

        '/',
        {
            name: 'basicstyles',
            groups: [ 'basicstyles', 'cleanup' ],
            items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat' ]
        },
        {
            name: 'paragraph',
            groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ],
            items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ]
        },
        {
            name: 'links',
            items: [ 'Link', 'Unlink', 'Anchor' ]
        },
        { name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
        '/',
        { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
        { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
        { name: 'tools', items: [ 'Maximize'] },
        { name: 'others', items: [ '-' ] },
    ];
};