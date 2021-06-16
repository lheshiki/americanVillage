let trigger = document.querySelector('.c-hamburger');
let hamburger = document.querySelector('.c-hamburger__line')
let menu = document.querySelector('.menu')

trigger.addEventListener('click',function(){
  if (this.className == 'c-hamburger') {
    this.classList.add('c-hamburger-on');
    hamburger.classList.add('c-hamburger-on__line');
    menu.style.display = 'block';
  }else{
    this.classList.remove('c-hamburger-on');
    hamburger.classList.remove('c-hamburger-on__line');
    menu.style.display = 'none';
  }
})