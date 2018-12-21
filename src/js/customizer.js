var wp = global.wp

document.addEventListener('DOMContentLoaded', function () {
  wp.customize('footer_copyright_text_setting', function (value) {
    value.bind(function (newval) {
      document.querySelector('.js-footer-copyright-text').innerHTML = newval
    })
  })
})
