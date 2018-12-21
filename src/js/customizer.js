document.addEventListener('DOMContentLoaded', function () {
  const wp = global.wp
  wp.customize('footer_copyright_text_setting', function (value) {
    value.bind(function (newval) {
      document.querySelector('.js-footer-copyright-text').innerHTML = newval
    })
  })
  wp.customize('hero_homepage_headline_setting', function (value) {
    value.bind(function (newval) {
      document.querySelector('.js-hero-headline').innerHTML = newval
    })
  })
  wp.customize('hero_homepage_description_setting', function (value) {
    value.bind(function (newval) {
      document.querySelector('.js-hero-description').innerHTML = newval
    })
  })
})
