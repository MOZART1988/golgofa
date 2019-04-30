CKEDITOR.dialog.add('galleryDialog', function (editor) {
  var galleryItems = $.map(window.EDITOR_GALLERIES, function (e, i) {
    return [[e, i]];
  });
  return {
    title: 'Выберите галерею',
    minWidth: 250,
    minHeight: 50,

    contents: [
      {
        'id': 'gallery_dialog',
        elements: [
          {
            type: 'select',
            id: 'gallery',
            label: '',
            items: galleryItems.sort(function (a, b) {
              return b - a;
            }),
            style: 'width:240px;',
            validate: CKEDITOR.dialog.validate.notEmpty("Выберите галерею"),
            setup: function (widget) {
              this.setValue(widget.data.id);
            },
            commit: function (widget) {
              widget.setData('id', this.getValue());
            }
          }
        ]
      }
    ]
    /*
     onOk: function() {
     var dialog = this;
     var id = dialog.getValueOf('gallery_dialog', 'gallery');

     var $image = $("<div/>", {
     'class':'gallery-placeholder __gallery__'+id+"__",
     alt:'',
     contenteditable: 'false',
     text:'gallery'
     });
     $image.on('click', function(){
     if (confirm('Удалить галерею?'))
     $image.remove();
     });
     editor.insertHtml($image.wrap('<div/>').parent().append('<p/>').html());
     },
     onCancel: function() {
     }*/
  };
});
