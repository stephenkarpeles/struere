document.addEventListener('DOMContentLoaded', () => {

  // grab the elements we need to reference
  const switchContent = document.querySelectorAll('[data-variant-content]');
  const switchButtonControls = document.querySelectorAll('button[data-variant-index]');

  // when there are buttons, attach the switchVariants function to the click event
  if (switchButtonControls !== null) {
    [...switchButtonControls].forEach(switchButtonControl => {
      switchButtonControl.addEventListener('click', () => {
        const currentVariant = switchButtonControl.dataset.variantIndex;
        switchVariants(currentVariant);
      });
    });
  }

  // the function that makes it all work
  function switchVariants(variant) {
    // this makes sure the right content displays
    const activeContent = document.querySelectorAll('.is-active-credential-detail');
    const selectedContent = document.querySelectorAll(`[data-variant-content='${variant}']`);
    [...activeContent].forEach(div => {
      div.classList.remove('is-active-credential-detail');
    });
    [...selectedContent].forEach(div => {
      div.classList.add('is-active-credential-detail');
    });
    
    // this makes sure the pills and dropdown are in sync (when applicable)
    if (switchButtonControls !== null) {
      const currentSwitchButton = document.querySelector('.is-active-credential-variant');
      const newSwitchButton = document.querySelector(`button[data-variant-index="${variant}"]`);
      currentSwitchButton.classList.remove('is-active-credential-variant');
      newSwitchButton.classList.add('is-active-credential-variant');
    }
  }

}, false);