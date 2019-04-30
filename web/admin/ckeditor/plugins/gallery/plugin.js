CKEDITOR.plugins.add('gallery', {
  icons: 'gallery',
  requires: 'widget',
  init: function (editor) {

    /*editor.ui.addButton('gallery', {
     label: 'Вставить галерею',
     command: 'galleryDialog',
     toolbar: 'insert'
     });*/

    editor.widgets.add('gallery', {
      'button': 'Вставить галерею',
      template: '<section class="gallery"></section>',
      upcast: function (element) {
        return element.name == 'div' && element.hasClass('gallery-placeholder');
      },
      dialog: 'galleryDialog',
      init: function () {
        var classes = this.element.getAttribute('class'),
          parts = classes.split('__'),
          id;
        for (var p in parts) {
          if (Number(parts[p]) == parts[p])
            id = parts[p];
        }
        if (!id)
          return;
        this.setData('id', id);
      },

      data: function () {
        var id = this.data.id;
        this.element.removeAttribute('class');
        console.log(this.element);
        this.element.addClass('gallery');
        this.element.setHtml('[gallery=' + id + ']');
      }
    });

    //editor.addCommand('galleryDialog', new CKEDITOR.dialogCommand('galleryDialog'));

    CKEDITOR.dialog.add('galleryDialog', this.path + 'dialogs/dialog.js');
  }
});
