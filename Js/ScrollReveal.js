
import ScrollReveal from 'scrollreveal';

export function Animate(){
  ScrollReveal().reveal('.element', { scale: 0.5,
reset: true
  });
  ScrollReveal().reveal('#Chisono #information h1', {
distance: '-50px',
origin: 'right',
delay: 200
});
ScrollReveal().reveal('#Chisono #information p', {
distance: '-50px',
origin: 'right',
delay:500
});

ScrollReveal().reveal('#Chisono #information #toProject', {
scale: 0.5
});

ScrollReveal().reveal('.project', { scale: 0.5,
reset: true
});


}
