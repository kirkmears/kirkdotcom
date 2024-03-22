const lightbox = new Lightbox();

lightbox.load({
  container: 'body',
  selector: 'a[data-lightbox]',
  imgOpts: {
    onload: () => lightbox.resize()
  }
});

window.addEventListener('load', () => {
  lightbox.ready(() => {
    lightbox.elements().forEach(el => {
      el.addEventListener('click', e => {
        e.preventDefault();
        lightbox.open(el);
      });
    });
  });
});