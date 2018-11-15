(function($) {
  "use strict";
  var ress = 0, loop, pg = false;
  ress = initSize();
  showLinkForce();


  //Run function when document ready
  $(document).ready(function() {
    initClicked();
    initHold();
    initScrollSpy();
    initPie();
    initAjaxContactForm();
    initBtnFile();
    initTooltip();
    initLightBox();
    initHoldFeatures();
    initMenu();
  });

  //Run function when finished load
  $(window).on('load', function() {
    initPageLoader();
    initIsotope();
  });

  //Run function when window scroll
  $(window).on('scroll', function() {

  });

  //Run function when window resize
  $(window).resize(function() {
    ress = initSize();
    initScrollSpyDef()
  });


  // get width window
  function initSize() {
    return $(window).width();
  }


  function initMenu() {
    $('#menu').metisMenu();
  }


  function initHold() {
    $('[data-holdwidth]').each(function(index, el) {
      var width = $(el).data('holdwidth');
      $(el).css('width', width);
    });
    $('[data-holdbg]').each(function(index, el) {
      var bg = $(el).data('holdbg');
      $(el).css('background-image', 'url(' + bg + ')');
    });
  }


  function initHoldFeatures() {
    if ($('.hold-feature').length > 0) {
      $.ajax({
        type: 'GET',
        url: 'php/get_config.php',
        async: true,
        cache: false,
        success: function(data) {
          if (data.au) {
            initAjaxUploader();
            $('.uploader-hold').show();
          }
          if (data.ac) {
            initCaptcha();
            $('.captcha-hold').show();
          }
        }
      });
    }
  }


  function initTooltip() {
    $('[data-toggle="tooltip"]').tooltip();
  }

  function initIsotope() {
    // init Isotope
    if ($('.galery-box').length > 0) {
      var $grid = $('.galery-box').isotope({
        itemSelector: '.item-box',
        layoutMode: 'fitRows'
      });

      $('.list-filter-galery a').click(function() {
        var $this = $(this), el_li = $this.closest("li");
        $('.list-filter-galery li').removeClass('active');
        $(el_li).addClass('active');
        $grid.isotope({filter: $(el_li).data('filter')});
        return false;
      });
    }

  }

  function showLinkForce() {
    setTimeout(function() {
      if (!pg) {
        $('#force-close-pg').fadeIn();
      }
    }, 10000); //10 seconds

    $('#force-close-pg').click(function() {
      $('.page-loader').fadeOut();
      pg = true;
    });
  }



  //clicked events
  function initClicked() {
    var id = '';
    $('.toogle-overfly').click(function() {
      var $this = $(this);
      var $is_active = $this.hasClass('active');
      if (!$is_active) {
        $('.toogle-overfly').removeClass('active');
        $this.addClass('active');
        $('.over-fly-area' + $this.attr('href')).addClass('active').fadeIn('slow', function() {
          $(".over-fly-area:not(" + $this.attr("href") + ")").fadeOut();
        });
      } else {
        $this.removeClass('active');
        $('.over-fly-area').removeClass('active').fadeOut();
      }
      return false;
    });
    $('.main-nav .inner-link').click(function() {
      var target = this.hash, $target = $(target);
      $('.toogle-overfly.active').click();
      if (ress <= 950) {
        $('html, body').stop().animate({
          'scrollTop': $target.offset().top - 50
        }, 1000, 'easeInOutExpo', function() {
          //window.location.hash = target;
        });
        return false;
      }
    });
    $('.fire-toogle-subject').click(function() {
      $('#toogle-subject').click();
      return false;
    });

    $('#option_subject a').click(function() {
      var text = $(this).text();
      $('#show-subject').text(text);
      $('#subject_contact').val(text);
      $('#toogle-subject').click();
      return false;
    });

    $('.link-work').click(function() {
      var d = new Date();
      var url = $(this).attr('href');
      $('#load-works #load-work-html').html('').fadeOut();
      $('#load-works').fadeIn();
      $('#work-wait-msg').show();
      setTimeout(function() {
        $.ajax({
          type: 'GET',
          url: url,
          async: true,
          cache: false,
          success: function(data) {
            $('#work-wait-msg').hide();
            $('#load-works #load-work-html').html(data).fadeIn();
            if ($('#load-work-html .image-popup').length > 0) {
              initLightBox();
            }
          }
        });
      }, 2000);

      return false;
    });

    $('.close-panel-work').click(function() {
      $('#load-works').fadeOut();
      $('#load-works #load-work-html').html('');
      return false;
    })

    $('.open-link').click(function() {
      initOpenPageLoader(this);
      return false;
    });


  }




  //scrollspy 
  function initScrollSpy() {
    initScrollSpyDef();
    $('.main-nav').on('activate.bs.scrollspy', function() {
      var text = $(this).find('li.active>a').data('text'), textlength = text.length, startloop = 0;
      $('#label-menu').html('');
      clearTimeout(loop);
      myLoop(textlength, startloop, text);

    });
  }

  function initScrollSpyDef() {
    $('body, .content-body').scrollspy({target: '.main-nav', offset: 100});
    $('body, .content-body').scrollspy('refresh');
  }

  function myLoop(textlength, startloop, text) {
    loop = setTimeout(function() {    //  call a 3s setTimeout when the loop is called
      var html = '<span>' + text[startloop] + '</span>';
      $('#label-menu').append(html);
      $('#label-menu span:last-child').css('opacity', 1);
      startloop++;
      if (startloop < textlength) {
        myLoop(textlength, startloop, text);             //  ..  again which will trigger another 
      }                        //  ..  setTimeout()
    }, 100);
  }

  //Pie
  function initPie() {
    if (!$('body').hasClass('dark-page')) {
      $('.chart').easyPieChart({
        easing: 'easeOutBounce',
        barColor: '#000000',
        size: 90,
        lineWidth: 2,
        onStep: function(from, to, percent) {
          $(this.el).find('.percent').text(Math.round(percent));
        }
      });
    } else {
      $('.chart').easyPieChart({
        easing: 'easeOutBounce',
        barColor: '#fff',
        size: 90,
        trackColor: '#000',
        lineWidth: 2,
        onStep: function(from, to, percent) {
          $(this.el).find('.percent').text(Math.round(percent));
        }
      });
    }
  }

  //page loader
  function initPageLoader() {
    setTimeout(function() {
      $('.page-loader').fadeOut();
      pg = true;
    }, 2000);
  }

  function initOpenPageLoader(el) {
    $('.page-loader').fadeIn();
    if (el) {
      var href = $(el).attr('href');
      setTimeout(function() {
        window.location = href
      }, 1000);
    }

  }

  // ajax contact form
  function initAjaxContactForm() {
    if ($('.validate-form').length > 0) {

      $('.validate-form').validate();
      $('.validate-form').submit(function() {
        var el = $(this);
        if (el.valid()) {
          var params = $(this).serialize();
          $.ajax({
            type: 'POST',
            data: params,
            url: "php/sending_mail.php",
            beforeSend: function() {
              el.find('.preload-submit').removeClass('hidden');
              el.find('.message-submit').addClass('hidden');
            },
            success: function(res) {
              res = jQuery.parseJSON(res);
              setTimeout(function() {
                el.find('.preload-submit').addClass('hidden');
                if (res.error === null) {
                  el.trigger('reset');
                  el.find('.message-submit').html(res.msg).removeClass('hidden');
                } else {
                  el.find('.message-submit').html(res.error).removeClass('hidden');
                }
              }, 1000)
            }
          });
        }
        return false;
      });
    }
  }

  //Tigger Custom Btn FIle
  function initBtnFile() {
    $(document).on('change', '.btn-file :file', function() {
      var input = $(this),
              numFiles = input.get(0).files ? input.get(0).files.length : 1,
              label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
      input.trigger('fileselect', [numFiles, label]);

    });

    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
      var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;
      console.log(input)
      if (input.length) {
        input.val(log);
      } else {
        if (log) {
          console.log(log);
        }
      }
    });
  }



  // ajax Uploader file
  function initAjaxUploader() {
    if ($('#upload-btn').length > 0) {

      var btn = document.getElementById('upload-btn'),
              wrap = document.getElementById('pic-progress-wrap'),
              picBox = document.getElementById('picbox'),
              errBox = document.getElementById('errormsg');

      var uploader = new ss.SimpleUpload({
        button: btn,
        url: 'php/upload.php',
        progressUrl: 'assets/external/Simple-Ajax-Uploader/extras/uploadProgress.php',
        name: 'fileatt',
        multiple: false,
        maxUploads: 2,
        maxSize: 2000,
        queue: false,
        allowedExtensions: ['pdf'],
        debug: true, hoverClass: 'btn-hover',
        focusClass: 'active',
        disabledClass: 'disabled',
        responseType: 'json',
        onSubmit: function(filename, ext) {
          var prog = document.createElement('div'),
                  outer = document.createElement('div'),
                  bar = document.createElement('div'),
                  size = document.createElement('div'),
                  self = this;
          prog.className = 'prog';
          size.className = 'size';
          outer.className = 'progress';
          bar.className = 'bar';

          outer.appendChild(bar);
          prog.appendChild(size);
          prog.appendChild(outer);
          wrap.appendChild(prog); // 'wrap' is an element on the page

          self.setProgressBar(bar);
          self.setProgressContainer(prog);
          self.setFileSizeBox(size);

          errBox.innerHTML = '';
        },
        onSizeError: function(filename, fileSize) {
          errBox.innerHTML = 'Max size 2Mb';
        },
        onExtError: function(filename, extension) {
          errBox.innerHTML = "File extension not permitted";
        },
        onError: function(filename, errorType, status, statusText, response, uploadBtn) {
          errBox.innerHTML = statusText;
        },
        onComplete: function(file, response) {
          if (!response) {
            errBox.innerHTML = 'Unable to upload file';
          }
          if (response.success === true) {
            picBox.innerHTML = '<i class="fa fa-file-pdf-o"></i> &nbsp;' + response.file;
            $('#picbox').fadeIn();
            $('#file-att').val(response.file);
          } else {
            if (response.msg) {
              errBox.innerHTML = response.msg;
            } else {
              errBox.innerHTML = 'Unable to upload file';
            }
          }
        }
      });
    }
  }

  //captcha configuration
  function initCaptcha() {
    $('#mycaptcha').simpleCaptcha({
      scriptPath: "assets/external/simpleCaptcha/simpleCaptcha.php",
      refreshButton: "<button type='button' class='btn btn-xs btn-default'  ><i class='fa fa-refresh'></i></button>"
    });
  }

  //Lightbox (popup)
  function initLightBox() {
    $('.image-popup').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      closeBtnInside: false,
      fixedContentPos: true,
      mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
      image: {
        verticalFit: true
      },
      zoom: {
        enabled: true,
        duration: 300 // don't foget to change the duration also in CSS
      }
    });

    $('.galery-popup-area').magnificPopup({
      delegate: 'a.galery-popup',
      type: 'image',
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-img-mobile',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
          return item.el.attr('title');
        }
      }
    });

    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
      disableOn: 700,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false
    });
  }

})(jQuery);









