$(document).ready(function () {
   $('body').on('click', '.life-categories .clearlist li a', function (){

       var data = [];

       var dataPage = $('.news-gallery-load a').attr('data-page');

       $('.life-categories .clearlist li.active').each(function () {
           data.push($(this).find('a').data('id'));
       });

       $.ajax({
           url: '/'+$('html').attr('lang')+'/events/',
           data: {
               'query': data,
           },
           dataType: 'html',
           success: function (data) {
               $('.main-events-list').html($(data).find('.page-life').find('.main-events-list').html());

               var dataPage = $(data).find('.news-gallery-load a').data('page');

               if (dataPage) {
                   console.log($(data).find('.ajax-more').html());
                   $('.ajax-more').html($(data).find('.ajax-more').html());
               } else {
                   $('.news-gallery-load a').remove();
               }

           },
           error: function () {

           }
       });
   });

   $('body').on('click', '.main-events-more a', function(){
       var currentPage = parseInt($(this).attr('data-page'));

       $.ajax({
           url: '/'+$('html').attr('lang')+'/basepage/default/index/?page=' + (currentPage + 1),
           dataType: 'html',
           success: function (data) {
               var dataPage = $(data).find('.main-events-more a').data('page');

               if (dataPage) {
                   $('.main-events-more a').attr('data-page', dataPage);
               } else {
                   $('.main-events-more').remove();
               }

               $('.main-events-list').append($(data).find('.main-events').find('.main-events-list').html());
           }
       });

       return false;
   });

   $('body').on('click', '.news-gallery-load a', function (){
       var currentPage = parseInt($(this).attr('data-page'));
       var query = $(this).data('query');

       $.ajax({
           url: '/'+$('html').attr('lang')+'/events/default/index/' + (query ? '?query=' + query + '&page=' + (currentPage + 1) : '?page=' + (currentPage + 1)),
           dataType: 'html',
           success: function (data) {
               var dataPage = $(data).find('.news-gallery-load a').data('page');

               if (dataPage) {
                   $('.news-gallery-load a').attr('data-page', dataPage);
               } else {
                   $('.news-gallery-load a').remove();
               }

               $('.main-events-list').append($(data).find('.main-events-list').html());
           }
       });

       return false;

   });

   $('body').on('beforeSubmit', '#contact-form', function () {
       var form = $(this);
       $.ajax({
           url: form.attr('action'),
           dataType: 'JSON',
           type: 'POST',
           data: form.serialize(),
           success: function (data) {
               $('#modal-contacts').removeClass('open');
               $('#modal-success').addClass('open');
               $('body').addClass('overflow');

               form.find('input').val('');
               form.find('textarea').val('');

               form.find('input').parent().removeClass('has-error');
               form.find('textarea').parent().removeClass('has-error');

               form.find('input').removeClass('active');
               form.find('textarea').removeClass('active');
           }
       });

       return false;
   });

});

